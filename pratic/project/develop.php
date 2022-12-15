<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function dd($var){
    if(gettype($var) == 'string')
        echo $var;
    elseif (gettype($var) == 'array'){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
    else{
        var_dump($var);
    }
    die();

}