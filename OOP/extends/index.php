<?php

require_once "vehicle.php";
require_once "car.php";
require_once "bicycle.php";

$audi = new Car("Audi", "blue", 120, 20);
echo "time Audi = " . round($audi->tripTime(300), 2) . '<br>';
echo "Audi has " . $audi->getWheels() . " wheels<br>";

$ferrari = new Car("Ferrari", "black", 320, 40);
echo "time Ferrari = " . round($ferrari->tripTime(300), 2) . '<br>';
echo "Ferrari has " . $ferrari->getWheels() . " wheels<br>";

$stern = new Bicycle("Stern", "white", 100);
echo "Stern has " . $stern->getWheels() . " wheels";