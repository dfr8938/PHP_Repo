<?php

//$string = '08:00 22-01-1989';
//echo 'Исходная строка: ' . $string . '<br>';
//
//$pattern = '/([0-9]{2}):([0-9]{2}) ([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//
//$newString = preg_match($pattern, $string);
//if ($newString) echo 'yes';
//else echo 'no';
//
//$replacenment = '$1:$2 $4-$3-$5';
//echo '<hr>';
//echo preg_replace($pattern, $replacenment, $string);
//
//echo '<hr>';

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
define('ROOT', dirname(__FILE__)); // ROOT = 'C:\xampp\htdocs\php\PHP_Repo\Practice\MVC'
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