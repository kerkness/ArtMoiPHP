<?php
/**
 * The base configuration for website
 */
//define("HOME_PATH", 'put your home direcoty here');
//define('API_KEY',"put your api key here");
//define('USER_NAME',"put your name here");
//define('DEFAULT_TITLE',"put your default website title here");
//define('DEFAULT_DESCRIPTION',"put your default website description here");

// set the uri for api
define('MOIAPI_BASEURI',"http://api.artmoi.me/1.0"); //TODO: CHANGE TO ARTMOI.ME

// set the path for home directory
define("HOME_PATH", '/home/andrewvalko/public_html');


define('API_KEY',"34f6d58a777a7faf4b1a38382398a30b"); //TODO: CHANGE TO ANDREWVALKO'S API KEY
define('USER_NAME',"Andrew Valko");
define('DEFAULT_TITLE',"Andrew Valko");
define('DEFAULT_DESCRIPTION',"Andrew Valko,Andrew, Valko, Artwork,Art,Portfolio");
define('DEFAULT_KEYWORD', "Andrew Valko,Andrew, Valko, Artwork,Art,Portfolio");

// ETC ...
// TODO: CHANGE TO PRODUCTION COLLECTION ID
$content = array(

    'prints' => array(
        'collections' => array(
            array(
//                'id' => 'hlkq3nio6xjg7e2gmuoy', Dev
                'id' => 'mftbsznmwvp3fns9zcoa',
                'name' => 'Prints',
            ),
            array(
//                'id' => 'u7wdeo5yxqjg7e2gmuoy', Dev
                'id' => 'soxm3oapwgp3fns9zcoa',
                'name' => 'Chinese New Year',
            ),
        ),
    ),

    'drawings' => array(
        'collections' => array(
            array(
//                'id' => 'cznyslrjvqjg7e2gmuoy', Dev
                'id' => 'm80czw1wbap3fns9zcoa',
                'name' => 'Drawings',
            ),
        ),
    ),


    'paintings' => array(
        'collections' => array(
            array(
//                'id' => 'c8frlkrdgrjg7e2gmuoy', Dev
                'id' => 'sf88dqk1uzp3fns9zcoa',
                'name' => 'Paintings',
            ),
            array(
//                'id' => 'blrdwtxgq7jg7e2gmuoy', Dev
                'id' => 'todjx97kihp3fns9zcoa',
                'name' => 'Early Work',
            ),
            array(
//                'id' => 'm2aozsg553jg7e2gmuoy', Dev
                'id' => 'g5jymbicmwp3fns9zcoa',
                'name' => 'Portraits',
            ),
        ),
    ),

);

Flight::set('content', $content);