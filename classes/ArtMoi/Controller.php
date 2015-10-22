<?php
/**
 * Class ArtMoi_Controller
 */


class ArtMoi_Controller
{
    public function collection($publicId, $page = 0, $limit = 0)
    {
        $request = Flight::artmoiRequest();

        $request->params('limit',$limit);
        $request->params('p',$page);

        $controller = "collection";
        $action = $publicId;
        $response = $request->call($controller, $action);

        return $response->collection();
    }









}



