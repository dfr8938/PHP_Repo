<?php

class Vehicle {

    public $brand;
    public $color;
    public $speed;
    public $fuel;
    const WHEELS = 4;

    public function __construct($brand, $color, $speed, $fuel) {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
        $this->fuel = $fuel;
    }

    public function tripTime($distance) {
        return $distance / $this->speed;
    }

    public function getWheels() {
        return self::WHEELS;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }
}