<?php

class Car {

    public $color;
    public $speed;
    public $fuel;
    public $brand;

    /**
     * Car constructor.
     * @param $color
     * @param $speed
     * @param $fuel
     * @param $brand
     */
    public function __construct($color, $speed, $fuel, $brand)
    {
        $this->color = $color;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->brand = $brand;
    }

    public function tripTime($distance) {
        return $distance / $this->speed;
    }

    public function getColor() {
        return $this->color;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function getFuel() {
        return $this->fuel;
    }

    public function getBrand() {
        return $this->brand;
    }
}

$car1 = new Car("white", 300, 100, "supra");
$car2 = new Car("black", 120, 60, "reno");
$car3 = new Car("blue", 400, 150, "ferrari");

echo '<pre>';
print_r($car1);
echo '</pre>';

echo $car1->tripTime(120) . '<br>';

echo '<pre>';
print_r($car2);
echo '</pre>';

echo $car2->tripTime(120) . '<br>';

echo '<pre>';
print_r($car3);
echo '</pre>';

echo $car3->tripTime(120) . '<br>';