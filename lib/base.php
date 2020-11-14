<?php
require_once('lib/dbHandler.php');
require_once('services/route.php');
require_once('routes.php');

class Base extends DBHandler {
    var $loginRequired;
    var $view;
    function __construct($loginRequired = true) {
        parent::__construct();
        if (!isset($_SESSION)) session_start();

    }

    public function render($fileName, $obj) {
        $viewPath = TEMPLATE_DIRS;
    }

    public function redirect($url) {
        header('Location: '. $url);
    }

    public function dd($obj) {
        var_dump($obj);exit;
    }

}

new Base();