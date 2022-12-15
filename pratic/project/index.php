<?php
require 'develop.php';

spl_autoload_register('my_autoloader', true, true);

function my_autoloader($class){
    $path = $class.'.php';
    if(file_exists($path)){
        require $path;
        if(!class_exists($class)){
            echo "Class : ".$class ." Undefined";
            exit();
        }
    }else{
        echo "File : ".$path ." Undefined";
        exit();
    }
}
$uri = $_SERVER['REQUEST_URI'];
$router = new \App\Core\Router($uri);
$router->run();

