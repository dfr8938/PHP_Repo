<?php

$str = "abracadabra";

function getCount($str) {
    $vowelsCount = 0;
    $arr = str_split($str);
    $len = count($arr);

    // enter your magic here
    // a, e, i, o, u
    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] == 'a'|| $arr[$i] == 'e' || $arr[$i] == 'i' || $arr[$i] == 'o' || $arr[$i] == 'u') {
            $vowelsCount++;
        }
    }

    return $vowelsCount;
}

echo getCount($str);