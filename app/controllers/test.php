<?php
require_once 'lib/base.php';
require_once 'services/requests.php';


class Test extends Base{
    var $myDb = null;
    function __construct () {
        parent::__construct($this->myDb);
    }

    public function index() {
        $title = "Some title";
        $view = 'test';
        
        return [$view, [
            'title' => $title,
            'items' => [],
        ]];
    }

}