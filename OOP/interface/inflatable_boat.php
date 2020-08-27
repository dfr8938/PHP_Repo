<?php

require_once "interfaces.php";

class Inflatable_boat implements Boat
{

    public function info()
    {
        // TODO: Implement info() method.
        echo "This is inflatable boat";
    }

    public function swim()
    {
        // TODO: Implement swim() method.
        echo "Inflatable boat swim";
    }
}