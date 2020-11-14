<?php 
require_once 'services/route.php';

class Auth {
    public static function checkLogin() {
        if (isset($_SESSION['id'])) {
            return $_SESSION['id'];
        }
        Route::redirect('/login');
    }


}