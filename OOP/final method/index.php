<?php

require_once "vehicle.php";
require_once "car.php";

// Fatal error: Cannot override final method Vehicle::print_str()
$car = new Car();
$car->print_str();