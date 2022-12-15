<?php
namespace App\Core;

class  Router {
    public $route;

    public function __construct($route)
    {
        $route = trim($route, '/');
        $routers = require $_SERVER['DOCUMENT_ROOT']."/App/Routers/routes.php";
        foreach ($routers as $k=>$value){
            if(isset($value[$route]))
                $this->route = $value[$route];
        }


    }

    public function add(){

    }

    public function match(){

    }

    public function run(){
        $action = $this->route['action'];
        $className = 'App'.DIRECTORY_SEPARATOR.
            'Controllers'.DIRECTORY_SEPARATOR.$this->route['controller'];
        $controller = new $className;
        $controller->$action();
    }


}