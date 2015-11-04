<?php

require_once('initflight.php');

require_once('config.php');


// Register classes with Flight
Flight::register('artmoiController', 'ArtMoi_Controller');
Flight::register('artmoiRequest', 'ArtMoi_Request');
Flight::register('artmoiResponse','ArtMoi_Response');
Flight::register('artmoiContact', 'ArtMoi_Controller_Contact');

// 404 Error page
Flight::map('notFound',function(){
    Flight::view()->set('body_content',"Sorry! 404 Page not Found");
    Flight::render('header',array(),'header_content');
    Flight::render('template', array());
});


// Contact Page
Flight::route('/contact',function(){
    $js = array("/scripts/contact.js");

    $contactList = Flight::get('contact');
    $contact = Flight::artmoiController()->contactIcons($contactList);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(MANDRILL_API_KEY != null){
            Flight::artmoiContact()->action_mandrill();
        }
        else{
            Flight::artmoiContact()->action_sendMail();
        }
    }
    Flight::render('header',array(),'header_content');
    Flight::render('contact/body', array("contact" => $contact), 'body_content');
    Flight::render('template', array("js" => $js, "pageName" => "Contact"));
});

// Display collections & items
Flight::route('/collection(/@page(/@collectionNumber))',function($page,$collectionNumber){
    $js = array("/scripts/jquery.arrowNavigation.js");
    $limit = Flight::get('creationLimit');
    $items = array();

    // if collection number exists, load creation page

    if($collectionNumber || $collectionNumber == "item")
    {
        $body = "creation/body";
        // Grab one item data from collection
        $p = (Flight::request()->query->p) ? Flight::request()->query->p : 0;
        $t = (Flight::request()->query->t) ? Flight::request()->query->t : "";

        // Redirect to the first item page if $page or $total is greater than creation limit
        if($p > $limit){
            $p = 0;
        }
        if($t > $limit){
            $t = $limit;
        }

        Flight::view()->set("page",$p);

        if($page == "creations"){
            $items = Flight::artmoiController()->creations($p, 1);
            $pageName = "creations";
        }else{
            $items = Flight::artmoiController()->collection($page, $p, 1);
            $pageName = $items->items[0]->title;
        }

    }
    else{

        if($page == "creations"){

            $body = "creations/body";
            $items = Flight::artmoiController()->creations(0, $limit);
        }
        else {
            $body = "collection/body";
            $content = Flight::get('content');
            foreach ($content as $k => $v)
            {
                if($k == $page) // match key name and page name
                {
                    $pageName = $v['collections']['name'];
                    $items = Flight::artmoiController()->collection($k);
                }
            }
        }
    }
    Flight::render('header',array(),'header_content');
    Flight::render($body, array("collection" => $items, "collectionNumber" => $collectionNumber,"pageName" => $page, "total" => $t), 'body_content');
    Flight::render('template', array("pageName" => $pageName, "js" => $js));
});

// Home Page
Flight::route('/', function(){

    Flight::render('home/body', array(), 'body_content');
    Flight::render('template', array());
});
 

Flight::start();