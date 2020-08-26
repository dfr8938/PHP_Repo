<?php

class Car {

    const WHEELS = 4;
    public $color;
    public $speed;
    public $fuel;
    public $brand;

    /**
     * car constructor.
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

    public function getWheels() {
        return self::WHEELS;
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

$car1 = new car("white", 300, 100, "supra");
echo "wheels car1: " . $car1->getWheels() . '<br>';

$car2 = new car("black", 120, 60, "reno");
echo "wheels car2: " . $car2->getWheels() . '<br>';

$car3 = new car("blue", 400, 150, "ferrari");
echo "wheels car3: " . $car3->getWheels() . '<br>';

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