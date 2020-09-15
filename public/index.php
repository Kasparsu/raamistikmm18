<?php

require(__DIR__ . '/../autoload.php');
require (__DIR__ . '/../helpers.php');
$router = new \App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
