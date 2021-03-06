<?php
/**
 * Class Artmoi_Response
 *
 * Response object
 */

class ArtMoi_Response
{

//    /**
//     * @var
//     */
//    public $className;

    /**
     * @var bool
     */
    public $error = false;

    /**
     * @var bool
     */
    public $success = false;

    /**
     * @var bool
     */
    public $results = false;

    /**
     * @var int
     */
    public $resultCount;

    /**
     * @var mixed
     */
    private $_data;




    /**
     * @param null $json
     */
    public function __construct($json = NULL)
    {
        $this->_data = json_decode($json);

        if ($this->_data->error) {
            $this->error($this->_data->error);
        }
        if ($this->_data->success) {
            $this->success($this->_data->success);
        }
        if ($this->_data->results) {
            $this->results($this->_data->results);
        }
        if ($this->_data->resultCount) {
            $this->resultCount($this->_data->resultCount);
        }
    }


    public function data()
    {
        return $this->_data;
    }

    public function resultCount( $count = null )
    {
        if (!is_null($count)) {
            $this->resultCount = $count;
        }
        return $this->resultCount;
    }

    /**
     * @param null $value
     *
     * @return null
     */
    public function error($value = NULL)
    {
        if (!is_null($value)) {
            $this->error = $value;
        }
        return $this->error;
    }

    /**
     * @param null $value
     *
     * @return null
     */
    public function success($value = NULL)
    {
        if (!is_null($value)) {
            $this->success = $value;
        }
        return $this->success;
    }

    /**
     * @param null $objects
     *
     * @return null
     */
    public function results($objects = NULL)
    {
        if( ! is_null($objects)){
            $this->results = $objects;
        }
        return $this->results;
    }
    /**
     * Returns the first value from the results set
     *
     * @return object|bool
     */
    public function first()
    {
        if( is_array($this->results()) and count($this->results()) > 0 ){
            return $this->results()[0];
        }
        else if($this->results() and ! is_array($this->results()) )
        {
            return $this->results();
        }

        return false;
    }


    /**
     * @return mixed
     */
    public function collection()
    {
        return $this->buildCollection($this->results());
    }

    /**
     * @return mixed
     */
    public function items()
    {
        if($this->results){
            if($this->results->items){
                return $this->buildItems($this->results->items);
            }
            else{
                return $this->buildItems($this->results);
            }
        }
    }


    /**
     * @param $items
     *
     * @return mixed
     */
    public function buildItems( $items )
    {
        if($items){
            foreach($items as $i => $item)
            {
                $items[$i] = ArtMoi_Model_Item::buildFromApi($item);
            }
        }
        return $items;
    }


    /**
     * @param $collections
     *
     * @return mixed
     */
    public function buildCollection($collection)
    {
        $collection = new ArtMoi_Model_Collection($collection);

        if( $collection->items )
        {
            $collection->items = $this->buildItems($collection->items);
        }

        return $collection;
    }



}