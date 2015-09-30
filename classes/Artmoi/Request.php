<?php
/**
 * Class ArtMoi_Request
 *
 * Request object
 */
class Artmoi_Request{

    public $apikey = API_KEY;
    public $apiURI = MOIAPI_BASEURI;
    public $params = array();

    public $response;

    public function __construct()
    {
        $this->apiKey = API_KEY;
        $this->response = new Artmoi_Response();
    }


    public function params($key = NULL, $value  = NULL)
    {
        if( ! is_null($key) and is_null($value)){
            return ($this->params[$key]) ? $this->params[$key] : false;
        }
        if( !is_null($key) and ! is_null($value)){
            $this->params[$key] = $value;

            return $this;
        }

        return $this->params;
    }

    public function call($controller, $action = 'index', $id = "")
    {
        if(!$controller)
        {
            $this->response->error(__('You  must provide a controller'));
        }
        else
        {
            // Record the parameters for building the api call
            $uriParts = array($this->apiURI, $controller, $action);

            if($id){
                $uriParts[] = $id;
            }

            $uri = implode('/',$uriParts);

            error_log("uri :: ".$uri);

            $this->params('key',$this->apikey);

            foreach($this->params() as $k => $v)
            {
                error_log("calling api with param $k => $v");
            }



            // TODO: TRY TO USE FILE_GET_CONTENT
            // CURL Arguments
            $args = array( 'http' =>
                array(
                'method' => 'POST',
                'timeout' => 45,
                'redirection' => 5,
                'httpversion' => '1.0',
                'blocking' => true,
//                'body' => $this->params(),
                'headers' => array(),
                'cookies' => array(),
                'content' => http_build_query($this->params()),
                )
            );


            $queryString = stream_context_create($args);
            $json = file_get_contents($uri, false, $queryString);
            $this->response = new Artmoi_Response($json);

//            $queryString = '&'.http_build_query($this->params());
//
//            $curl = curl_init();
//            curl_setopt($curl, CURLOPT_URL, $uri);
//            curl_setopt($curl, CURLOPT_POSTFIELDS, ltrim($queryString, '&'));
//            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//            $result = curl_exec($curl);
//            curl_close($curl);
//            $this->response = new Artmoi_Response($result);

        }
        return $this->response();
    }

    public function response()
    {
        if(!$this->response->error && !$this->response->success)
        {
            $this->response->error('Incomplete request. Success or Error must be called.');
        }
        return $this->response;
    }

}