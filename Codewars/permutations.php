<?php

//require_once "config/help_func.php";

function permutations(string $s): array {
    // Your code here

    $arr = str_split($s);
    $len = count($arr);
    if ($len == 1) {
        $results[] = $arr[0];
    } else {

    }
    return $arr;
}

//$a = 'a';
//permutations($a);
