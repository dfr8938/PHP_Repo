<?php

class Bicycle extends Vehicle {

    const WHEELS = 2;

    public function __construct($brand, $color, $speed)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
    }

    public function getWheels()
    {
        return self::WHEELS;
    }
}