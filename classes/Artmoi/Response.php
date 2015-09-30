<?php
/**
 * Class Artmoi_Response
 *
 * Response object
 */

class Artmoi_Response
{
    public $error = false;

    public $success = false;

    public $results = false;


    public function __construct($json = NULL)
    {
        $data = json_decode($json);

        if ($data->error) {
            $this->error($data->error);
        }
        if ($data->success) {
            $this->success($data->success);
        }
        if ($data->results) {
            $this->results($data->results);
        }
    }


    public function error($value = NULL)
    {
        if (!is_null($value)) {
            $this->error = $value;
        }
        return $this->error;
    }

    public function success($value = NULL)
    {
        if (!is_null($value)) {
            $this->success = $value;
        }
        return $this->success;
    }

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


}