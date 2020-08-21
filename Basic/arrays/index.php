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

$colors = ["black", "white", "red", "blue", "orange"];
$colors[] = "green";

$len = count($colors);

$i = 0;
while ($i < $len){
    if ($colors[$i] == "red")
        unset($colors[$i]);
    elseif ($colors[$i] == "white")
        $colors[$i] = "green";
    $i++;
}

echo "<pre>";
print_r($colors);
echo "</pre>";

$peoples = [
    ["firstname" => "James", "lastname" => "Bond", "age" => 35],
    ["firstname" => "John", "lastname" => "Doe", "age" => 25]
];

$len = count($peoples);

//for ($i = 0; $i < $len; $i++) {
//    if ($peoples[$i]["firstname"])
//        echo "<p>Имя №" . ($i + 1) . ": " . $peoples[$i]["firstname"] . "</p>";
//}

$i = 1;
foreach ($peoples as $key => $value) {
    echo "<p>Имя №" . $i . ": " . $value["firstname"] . "</p>";
    $i++;
}

