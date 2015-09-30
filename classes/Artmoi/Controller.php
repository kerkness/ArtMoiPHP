<?php
/**
 * Class Artmoi_Controller
 */


class Artmoi_Controller
{

    public function collection($publicId, $page = 0, $limit = 0)
    {
        $request = Flight::artmoiRequest();

        $request->params('limit',$limit);
        $request->params('p',$page);

        $controller = "collection";
        $action = $publicId;
        $response = $request->call($controller, $action);

        return $response->results();
    }


}



