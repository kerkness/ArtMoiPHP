<?php

class ArtMoi_Paginate
{
    public $page;
    public $total;
    public $limit;
    public $lastPage;
    public $nextPage;
    public $prevPage;

    public function __construct($page, $limit, $total)
    {
        $this->page = $page;
        $this->limit = $limit;
        $this->total = $total;

        // Calculate the total number of pages
        $this->lastPage = ceil( $total / $limit );

        $this->nextPage = $this->page + 1;

        if( $this->nextPage > $this->lastPage )
        {
            $this->nextPage = 1;
        }

        $this->prevPage = $this->page - 1;

        if( $this->prevPage <= 0 )
        {
            $this->prevPage = $this->lastPage;
        }
    }

}