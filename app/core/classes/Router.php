<?php

namespace myframe;

class Router
{
    public $routes = [];
    protected $uri;
    protected $method;


    public function __construct()
    {
        $this->method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    }

    protected function add($uri, $controller, $method)
    {
        $this->routes[] =
                        [
                            'uri' => $uri,
                            'controller' => $controller,
                            'method' => $method,
                            'middleware' => null

                    ];
        return $this;
    }

    public function only($middleware)
    {
//        dump($this->routes);
//        dump($middleware);
//        dump(count($this->routes) - 1);

        $this->routes[array_key_last($this->routes)]['middleware'] = $middleware;
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }
    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function match()
    {


        $matches = false;
        foreach ($this->routes as $route)
        {

            if (($route['uri'] === $this->uri) && ($route['method'] === strtoupper($this->method)))
            {
                if ($route['middleware'])
                {
                    $middleware = MIDDLEWARE[$route['middleware']] ?? false;
                    if (!$middleware)
                    {
                        throw new \Exception("Incorrect middleware{$route['middleware']}");

                    }
                    (new $middleware)->handle();
                }

//                if ($route['middleware'] == 'guest')
//                {
//                    if (chekauth())
//                    {
//                        redirect('/');
//                    }
//                }
//
//                if ($route['middleware'] == 'auth')
//                {
//                    if (!chekauth())
//                    {
//                        redirect('/register');
//                    }
//                }

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