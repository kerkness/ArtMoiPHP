<?php
/**
 * The base configuration for website
 *
 * TODO: Add more documentation and instructions.
 *
 */

// base site url
define('BASE_URL', "http://example.com");

// set the uri for api
define('MOIAPI_BASEURI',"http://api.artmoi.me/1.0");

// set the path for home directory
define("HOME_PATH", '/home/username/www');

// Enter your ArtMoi API Key
// Login to artmoi.me to create an integrations key
define('API_KEY',"<INSERT YOUR API KEY HERE>");

// Enter your Mandril API Key if you have one
// This is optional
//define("MANDRILL_API_KEY", "<INSERT YOUR MANDRIL API KEY HERE>");

// Site Name
define('USER_NAME',"Artist Name");

// User Email Address
define('USER_EMAIL',"Artist Email address");

// Site Title
define('DEFAULT_TITLE',"SITE TITLE");

// Site Description
define('DEFAULT_DESCRIPTION',"SITE DESCRIPTION");

// Site Keyword
define('DEFAULT_KEYWORD', "SITE KEYWORDS");

// Match Page Content With ArtMoi Content
$content = array(

    // http://www.yourdomain.com/page1
    'page1' => array(
        'collections' => array(
            array(
                'id' => '<Enter the collection id>',
                'name' => 'Collection Title One',
            ),
        ),
    ),

    // http://www.yourdomain.com/page2
    'page2' => array(
        'collections' => array(
            array(
                'id' => '<Enter the collection id>',
                'name' => 'Collection Title Two',
            ),
        ),
    ),
);

$pages = array(
    'page1' => 'Page One',
    'page2' => 'Page Two',
);

/**
 * DO NOT EDIT BELOW THIS LINE
 */

// Save content
Flight::set('content', $content);
Flight::set('pages', $pages);