<?php
class Tools {
    function __construct() {

    }

    public function dd($obj) {
        var_dump($this->$obj);exit;
    }
}