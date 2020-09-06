<?php

$num = [ 1, 1, 1, 2, 1, 1 ];
$num1 = [0, 0, 0.55, 0, 0];
$num2 = [2, 1, 2];

function find_uniq(array $num) {

    $x = $num[0];
    $i = 0;
    $array_uniq = array();
    foreach ($num as $item) {
        if ($item == $x) {
           $i++;
           $array_uniq[0] = $x;
        }
        else {
            $array_uniq[1] = $item;
        }
    }
    $count = 0;
    foreach ($num as $item) {
        if ($item == $array_uniq[0]) {
            $count++;
        }
    }

    if ($count != 1) return $array_uniq[1];
    else return $array_uniq[0];
}

echo find_uniq($num) . '<hr>';
echo find_uniq($num1) . '<hr>';
echo find_uniq($num2) . '<hr>';