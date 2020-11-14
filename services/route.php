<?php
require 'config/conf.php';
class Route {
    protected static $routes;

    public static function redirect($url) {
        header('Location: '. $url);
    }

    public static function get($route, $cf) {
        static::$routes[$route] = $cf;
    }

    public static function routeList() {
        return static::$routes;
    }

    // takes url and Controller@function
    public static function fetch($route, $cf) {
        $current_url = $_SERVER['REQUEST_URI'];
        if (strpos($current_url, $route) ) {
            return null;
        }
        else {
            list($controller, $func) = explode('@', $cf);
            require_once CONTROLLER_DIRS . strtolower($controller) . '.php';
            $obj =  new $controller();
            $dataFound = $obj->{$func}();
            if ($dataFound && is_array($dataFound)) {
                list($view, $data) = $dataFound;
                extract($data);
                require_once TEMPLATE_DIRS . strtolower($view) . '.php';
                unset($obj);
            }
            else if (is_string($dataFound)){
                echo $dataFound;
            }
            exit;
        }
    }

    public static function get_mime_type($filename) {
        $idx = explode( '.', $filename );
        $count_explode = count($idx);
        $idx = strtolower($idx[$count_explode-1]);
    
        $mimet = array( 
            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',
    
            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
    
            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',
    
            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',
    
            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',
    
            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',
            'docx' => 'application/msword',
            'xlsx' => 'application/vnd.ms-excel',
            'pptx' => 'application/vnd.ms-powerpoint',
    
    
            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );
    
        if (isset( $mimet[$idx] )) {
         return $mimet[$idx];
        } else {
         return 'application/octet-stream';
        }
     }


}

