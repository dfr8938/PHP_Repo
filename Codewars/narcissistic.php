<?php

$num = 153;

function narcissistic($num) {

    $arr = str_split($num);
    $len = count($arr);
    $numb = array();
    $i = 0;
    foreach ($arr as $item) {
        $numb[$i] = $item ** $len;
        $i++;
    }
    $res = array_sum($numb);
    if ($num == $res) {
        return true;
    }
    return false;
}

echo narcissistic($num);
