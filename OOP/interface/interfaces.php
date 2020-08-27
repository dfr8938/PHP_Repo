<?php

interface Vehicle {

    public function info();
}

interface Car extends Vehicle {

    public function drive();
}

interface Boat extends Vehicle {
    public function swim();
}