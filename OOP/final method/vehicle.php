<?php

class Vehicle
{
    final public function print_str()
    {
        echo "This class: " . __CLASS__ . '<br>';
        echo "This method: " . __METHOD__;
    }
}