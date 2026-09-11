<?php

namespace myframe;

class Router
{
    public $routes = [];
    protected $uri;
    protected $method;


    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    }

    protected function add($uri, $controller, $method)
    {
        $this->routes[] =
                        [
                            'uri' => $uri,
                            'controller' => $controller,
                            'method' => $method

                    ];
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }
    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, 'DELETE');
    }

    public function match()
    {
        $matches = false;
        foreach ($this->routes as $route)
        {
            if (($route['uri'] === $this->uri) && ($route['method'] === strtoupper($this->method)))
            {

                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;
            }
        }
        if (!$matches)
        {
            abort();
        }
    }




}