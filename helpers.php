<?php

function dd($var){
    var_dump($var);
    die();
}

function view($name, $vars){
    extract($vars);
    include(__DIR__ . '/views/'. $name .'.php');
}