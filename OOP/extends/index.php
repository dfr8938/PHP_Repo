<?php

require_once "vehicle.php";
require_once "car.php";
require_once "bicycle.php";

$audi = new car("Audi", "blue", 120, 20);
echo "time Audi = " . round($audi->tripTime(300), 2) . '<br>';
echo "Audi has " . $audi->getWheels() . " wheels<br>";

echo '<hr>';
$ferrari = new car("Ferrari", "black", 320, 40);
echo "time Ferrari = " . round($ferrari->tripTime(300), 2) . '<br>';
echo "Ferrari has " . $ferrari->getWheels() . " wheels<br>";

echo '<hr>';
$stern = new Bicycle("Stern", "white", 100);
echo "time Stern = " . round($stern->tripTime(300), 2) . '<br>';
echo "calories = " . $stern->caloriesBurned(65, 100, 300) . '<br>';
echo "Stern has " . $stern->getWheels() . " wheels";