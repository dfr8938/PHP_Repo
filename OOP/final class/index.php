<?php

require_once "vehicle.php";
require_once "car.php";
require_once "audi.php";

// Fatal error: Class Audi may not inherit from final class (Car)
$audiBlack = new Audi("Audi", 120, 12, "black");
$audiBlack->getBrand();
$audiBlack->getSpeed();
$audiBlack->getFuel();
$audiBlack->getColor();

