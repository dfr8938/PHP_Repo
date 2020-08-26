<?php

class Bicycle extends Vehicle {

    const WHEELS = 2;

    public function __construct($brand, $color, $speed)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
    }

    // Расход энергии (ккал) = 0,014 * М * t * (0,12 * П - 7)
    // М - вес тела человека
    // t - время заезда
    // П - средний пульс во время заезда
    public function caloriesBurned($weight, $pulse, $distance)
    {
        $time = $this->tripTime($distance) * 60; // минуты
        return 0.014 * $weight * $time * (0.12 * $pulse - 7);
    }

    public function getWheels()
    {
        return self::WHEELS;
    }
}