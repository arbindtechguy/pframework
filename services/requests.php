<?php

class Request {

    public static function redirect($url) {
        header('Location: '. $url);
    }

    public function get($params = null) {
        if (isset($_REQUEST[$params])) {
            return $_REQUEST[$params];
        }
        return $_REQUEST;
    }
    public function query($params) {
        if (isset($_REQUEST[$params])) {
            return $_REQUEST[$params];
        }
        return null;
    }
    public function post($params) {
        if (isset($_REQUEST[$params])) {
            return $_REQUEST[$params];
        }
        return null;
    }
}