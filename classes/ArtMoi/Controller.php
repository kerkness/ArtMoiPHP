<?php
/**
 * Class ArtMoi_Controller
 */


class ArtMoi_Controller
{


    public function collection($publicId, $page = 0, $limit = 0, $skip = 0)
    {
        error_log("Calling collection $publicId  with p = $page and limit = $limit");

        $request = Flight::artmoiRequest();

        $request->params('limit',$limit);
        $request->params('p',$page);

        $controller = "collection";
        $action = $publicId;
        $response = $request->call($controller, $action);

//        Moi::log($response->data());

        return $response;

    }

    public function creations($page = 0, $limit = 100, $skip = 0)
    {

        error_log("Making a call to cretion user p = $page limit = $limit  skip = $skip");

        $request = Flight::artmoiRequest();
        $request->params('p',$page);
        $request->params('limit',$limit);

        $controller = "creation";
        $action = "user";
        $response = $request->call($controller,$action);

        return $response;
    }

}



