<?php

$fruits = [
    "apple", "orange", "potato", "cherry", "strawberry"
];

function ft_arr($arr) {
    return count($arr);
}

function ft_arrEl($arr) {
    for ($i = 0; $i < ft_arr($arr); $i++) {
        echo "<p>" . $arr[$i] . "</p>";
    }
}

function ft_print($str) {
    return $str;
}

echo "<p>" . ft_print("Hello, world!") . "</p>";
echo "<p>" . ft_arr($fruits) . "</p>";
echo "<p>" . ft_arrEl($fruits) . "</p>";

