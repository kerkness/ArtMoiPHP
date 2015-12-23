<?php

/**
* Include and set up FlightPHP
*/
$dir = dirname(__FILE__);

if( ! class_exists('Flight') )
{
    require $dir . '/flight/flight/Flight.php';
}

// path for classes
Flight::path( $dir .'/classes');

// set the path for view files
Flight::set('flight.views.path', $dir . '/views');
