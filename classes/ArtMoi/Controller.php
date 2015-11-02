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

    public function creations($page = 0, $limit = 30)
    {
        $request = Flight::artmoiRequest();
        $request->params('p',$page);
        $request->params('limit',$limit);

        $controller = "creation";
        $action = "user";
        $response = $request->call($controller,$action);

        return $response->items();
    }

    public function contactIcons ($contact)
    {
        if($contact){
            foreach ($contact as $contactList){
                $iconName = $contactList['name'];
            switch( $iconName ) {
                case 'behance':
                    $contact[$iconName]['icon'] = 'fa fa-behance';
                    break;
                case 'blogger':
                    $contact[$iconName]['icon'] = 'images/blogger.png';
                    break;
                case 'youtube':
                    $contact[$iconName]['icon'] = 'fa fa-youtube';
                    break;
                case 'email':
                    $contact[$iconName]['icon'] = 'fa fa-envelope-o';
                    break;
                case 'facebook':
                    $contact[$iconName]['icon'] = 'fa fa-facebook-official';
                    break;
                case 'flickr':
                    $contact[$iconName]['icon'] = 'fa fa-flickr';
                    break;
                case 'foursquare':
                    $contact[$iconName]['icon'] = 'fa fa-foursquare';
                    break;
                case 'googleplus':
                    $contact[$iconName]['icon'] = 'fa fa-google-plus';
                    break;
                case 'instagram':
                    $contact[$iconName]['icon'] = 'fa fa-instagram';
                    break;
                case 'linkedin':
                    $contact[$iconName]['icon'] = 'fa fa-linkedin';
                    break;
                case 'pinterest':
                    $contact[$iconName]['icon'] = 'fa fa-pinterest';
                    break;
                case 'skype':
                    $contact[$iconName]['icon'] = 'fa fa-skype';
                    break;
                case 'tumblr':
                    $contact[$iconName]['icon']= '1fa fa-tumblr';
                    break;
                case 'twitter':
                    $contact[$iconName]['icon'] = 'fa fa-twitter';
                    break;
                case 'vimeo':
                    $contact[$iconName]['icon'] = 'fa fa-vimeo';
                    break;
                case 'website':
                    $contact[$iconName]['icon'] = 'fa fa-star-o';
                    break;

                }
            }
            return $contact;
        }
    }

}



