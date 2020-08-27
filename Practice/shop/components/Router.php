<?php

class Router
{
    private $routes;
    private $uri;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include ($routesPath);
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
        $uri = $this->getURI();
        //echo $uri . '<br><hr>';

        // Поиск запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {

            // Сравнение $uri и $uriPattern
            if (preg_match("~$uriPattern~", $uri)) {

                // Разбивка $path по '/' на подстроки и запись в массив
                $segments = explode('/', $path);
                //print_r($segments);
                //echo '<br>';

                // Нахождение имени controller
                $nameController = ucfirst(array_shift($segments) . 'Controller');
                echo $nameController;

                echo '<br>';

                // Нахождение имени action
                $nameAction = 'action' . ucfirst(array_shift($segments));
                echo $nameAction;
            }

        }
    }
}