<?php

require_once "audi.php";
require_once "inflatable_boat.php";
require_once "mersedesAmfibius.php";

$audi = new Audi();
echo $audi->info() . '<br>';
echo $audi->drive() . '<br>';

echo '<hr>';

$inflatableBoat = new Inflatable_boat();
echo $inflatableBoat->info() . '<br>';
echo $inflatableBoat->swim() . '<br>';

echo '<hr>';

$mersedesAmfibius = new MersedesAmfibius();
echo $mersedesAmfibius->info() . '<br>';
echo $mersedesAmfibius->drive() . '<br>';
echo $mersedesAmfibius->swim() . '<br>';