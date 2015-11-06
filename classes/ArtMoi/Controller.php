<?php
/**
 * Class ArtMoi_Controller
 */


class ArtMoi_Controller
{


    public function collection($publicId, $page = 0, $limit = 0, $skip = 0)
    {
        $request = Flight::artmoiRequest();

        $request->params('skip',$skip);
        $request->params('limit',$limit);
        $request->params('p',$page);

        $controller = "collection";
        $action = $publicId;
        $response = $request->call($controller, $action);
        return $response->collection();
    }

    public function creations($page = 0, $limit = 30, $skip = 0)
    {

        $request = Flight::artmoiRequest();
        $request->params('p',$page);
        $request->params('limit',$limit);
        $request->params('skip',$skip);

        $controller = "creation";
        $action = "user";
        $response = $request->call($controller,$action);
        return $response->items();
    }

}



