<?php

$path = dirname(__FILE__);

if( is_file( $path.'/initflight.php') ){
    require_once( $path.'/initflight.php');
}

if( is_file( $path.'/config.php') ){
    require_once($path.'/config.php');
} elseif ( is_file( $path.'/../config.php') )  {
    require_once( $path.'/../config.php' );
} else {
    echo "Invalid config file.";
    die();
}


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
Flight::route('/contact',function()
{
    // TODO:: We will need to include the form validation as a submodule for the portfolio site.
    $js = array("../vendor/formvalidation/dist/js/formValidation.min.js", "../vendor/formvalidation/dist/js/framework/bootstrap.min.js", "//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js","/scripts/contact.js" );
    $css = array("../vendor/formvalidation/dist/css/formValidation.min.css", "//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css");

    $contact = Flight::artmoiContact()->action_contactPoints();

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
    Flight::render('template', array("js" => $js, "css" => $css,"pageName" => "Contact"));
});

// Display collections & items
Flight::route('/collection(/@collectionId)',function($collectionId){


    $creationLimit = Flight::get('creationLimit');
    $showCreations = Flight::get('showCreations');

    $page = (Flight::request()->query->page) ? Flight::request()->query->page : 0;
    $skip = (Flight::request()->query->skip) ? Flight::request()->query->skip : 0;
    $limit = 30;

    if($collectionId == "creations" && $showCreations !== false){

        $body = "creations/body";
        $pageName = "creations";

        if($skip + 30 > $creationLimit){
            $limit = $creationLimit - $skip;

            if($limit <= 0){
                $page = 0;
                $skip = 0;
                $limit = 30;
            }
        }
        $items = Flight::artmoiController()->creations($page, $limit, $skip);

    }

    else {

        $body = "collection/body";
        $content = Flight::get('content');

        foreach ($content as $k => $v)
        {
            if($k == $collectionId) // match key name and collection ID
            {
                $pageName = $v['collections']['name'];
                $collectionId = $v['collections']['id'];
                $items = Flight::artmoiController()->collection($k,$page,$limit,$skip);
            }
        }
    }

    Flight::render('header',array(),'header_content');
    Flight::render($body, array("items" => $items, "collectionNumber" => $collectionId,"collectionId" => $collectionId, "page" => $page ,"skip" => $skip, "creationLimit" => $creationLimit), 'body_content');
    Flight::render('template', array("pageName" => $pageName));
});


Flight::route('/item(/@action)',function($action){
    $js = array("/scripts/jquery.arrowNavigation.js");
    $showCreations = Flight::get('showCreations');

    $p = (Flight::request()->query->p) ? Flight::request()->query->p : 0;

    if($action == "creations"){
        if($showCreations !== false){
           if( Flight::get('itemCount') < Flight::get('creationLimit'))
           {
               $total = Flight::get('itemCount');
           }
            else{
                $total = Flight::get('creationLimit');
            }

            if($p > $total && $total > 0){
                $p = 0;
            }

            $items = Flight::artmoiController()->creations($p, 1);
            $pageName = ($items[0]->title) ? $items[0]->title : "Untitled";
        }
    }
    else{

        $items = Flight::artmoiController()->collection($action, $p, 1);

        $total = $items->itemCount;

        $pageName = $items->items[0]->title;
    }

    Flight::render('header',array(),'header_content');
    Flight::render('creation/body', array("collection" => $items, "action" => $action, "collectionId" => $action, "t" => $total, "page" => $p), 'body_content');
    Flight::render('template', array("pageName" => "$pageName", "js" => $js));


});

// Home Page
Flight::route('/', function(){



    Flight::render('home/body', array(), 'body_content');
    Flight::render('template', array());

});
 

Flight::start();


