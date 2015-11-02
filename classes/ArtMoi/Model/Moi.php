<?php

class ArtMoi_Model_Moi extends stdClass
{
    public function __construct( $data )
    {
        foreach( $data as $key => $value )
        {
            $this->$key = $value;
        }
    }
}