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
                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                echo 'Класс: ' . $controllerName;

                echo '<br>';

                // Нахождение имени action
                $actionName = 'action' . ucfirst(array_shift($segments));
                echo 'Метод: ' . $actionName;

                echo '<br>';

                // Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                // если $controllerFile существует, то подключаем
                if (file_exists($controllerFile)) {
                    include_once ($controllerFile);
                }
                else echo 'No!';

                // Создание объекта класса $nameController
                $controllerObject = new $controllerName();
                $result = $controllerObject->$actionName();
                if ($result != null) {
                    break;
                }
            }

        }
    }
}