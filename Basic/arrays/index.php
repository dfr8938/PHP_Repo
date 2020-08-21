<?php

$array1 = array("foo", "bar", "hello", "world");

$array2 = ["foo", "bar", "hello", "world"];

$array3 = ["foo" => "bar", "hello" => "world"];

$array4 = [1 => "foo", 2 => "bar", 3 => "hello", 4 => "world"];

echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<pre>";
print_r($array2);
echo "</pre>";

echo "<pre>";
print_r($array3);
echo "</pre>";

echo "<pre>";
var_dump($array4);
echo "</pre>";