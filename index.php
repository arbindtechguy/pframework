<?php
require_once 'routes.php';

$routes = Route::routeList();
if (isset($_SERVER['REDIRECT_URL']) && isset($routes[$_SERVER['REDIRECT_URL']])) {
    Route::fetch($_SERVER['REDIRECT_URL'], $routes[$_SERVER['REDIRECT_URL']]);
}
else if (isset($_SERVER['REQUEST_URI'])  && isset($routes[$_SERVER['REQUEST_URI']])) {
    Route::fetch($_SERVER['REQUEST_URI'], $routes[$_SERVER['REQUEST_URI']]);
}
else if (isset($_SERVER['REDIRECT_URL']) && strpos($_SERVER['REDIRECT_URL'], '/assets') === 0) {
    header("Content-type: ". Route::get_mime_type('public' . $_SERVER['REDIRECT_URL']) . "; charset: UTF-8");
    $file = file_get_contents('public' . $_SERVER['REDIRECT_URL']);
    echo $file; exit;
}