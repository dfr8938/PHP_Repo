<?php

echo "<h1>Index page</h1><hr>";

/*
 * FRONT CONTROLLER
 *
 * 1. Общие настройки
 * 2. Подключение файлов системы
 * 3. Установка соединения с БД
 * 4. Вызов Router
 *
 */

/*
 * 1. Общие настройки
 *    отображение всех ошибок
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
 * 2. Подключение файлов системы
 *    подключение файла с классом Router
 */
define('ROOT', dirname(__FILE__)); // ROOT = 'C:\xampp\htdocs\php\PHP_Repo\Practice\shop'
require_once (ROOT.'/components/Router.php');

/*
 * 3. Установка соединения с БД
 */
// ...

/*
 * 4. Вызов Router
 */
$router = new Router();
echo $router->run();