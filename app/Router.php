<?php


namespace App;


class Router
{
    private $uri;
    private $method;
    private static $routes;
    /**
     * Router constructor.
     * @param $uri
     * @param $method
     */
    public function __construct($uri, $method)
    {
        $this->uri = $uri;
        $this->method = $method;
        require(__DIR__ . '/../routes.php');
        $this->match();

    }
    public function match(){

        foreach (self::$routes as $route){
            if($route['method'] == $this->method && $route['uri'] == $this->uri){
                call_user_func($route['action']);
                return;
            }
        }
        $title = "404 page not found";
        include(__DIR__ . '/../views/page.php');
    }

    public static function route($uri, $method, callable $action){
        self::$routes[] = ['uri' => $uri, 'method' => $method, 'action' => $action];
    }

    public static function get($uri, callable $action){
        self::route($uri, 'GET', $action);
    }
    public static function post($uri, callable $action){
        self::route($uri, 'POST', $action);
    }
}