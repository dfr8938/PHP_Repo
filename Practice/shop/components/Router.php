<?php

class Router
{
    private $routes;
    private $uri;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include ($routesPath);
        $this->uri = $this->getURI();
    }

    /*
     * возвращает запрос в виде строки
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Получить строку запроса
        return $this->uri;
    }
}