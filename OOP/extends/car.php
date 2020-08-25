<?php

class Car extends Vehicle {

    public function tripTime($distance) {
        return $distance / $this->speed;
    }
}