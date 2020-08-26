<?php

class Vehicle
{
    public $brand;
    public $speed;
    public $fuel;
    public $color;

    public function __construct($brand, $speed, $fuel, $color)
    {
        $this->brand = $brand;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->color = $color;
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

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
}