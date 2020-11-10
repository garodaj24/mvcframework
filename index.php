<?php

    use System\Routes;

    spl_autoload_register(function ($class){
        include str_replace('\\', '/', $class) . '.php';
    });

    $uri = $_SERVER['REQUEST_URI'];
    $uri = ltrim($uri, '/');
    $uri = explode('/', $uri);

    new Routes($uri);

?>