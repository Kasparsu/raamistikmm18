<?php
spl_autoload_register(function ($class){
    $class = explode('\\', $class);
    $className = array_pop($class);
    foreach($class as &$part){
        $part = strtolower($part);
    }
    $path = implode('/', $class);
    require_once(__DIR__ . '/'. $path . '/'.  $className .'.php');
});