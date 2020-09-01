<?php

function multiply($arr) {
    $result = 1;
    foreach ($arr as $item) {
        $result *= (int) $item;
    }
    return $result;
}

function create_array(int $num) {
    return str_split((string) $num);
}

function end_number($num) {
    return multiply(create_array($num));
}

function persistence(int $num): int {
    $len = count(create_array($num));
    $a = end_number($num);
    $res = 0;
    if ($num < 10) {
        $res = 0;
    }
    elseif ($num % 10 == 0) {
        $res = 0;
    } else {
        for ($i = 0; $i <= $len; $i++) {
            if ($a > 9) {
                $a = end_number(end_number($num));
            }
            $res++;
        }
    }
    return $res;
}