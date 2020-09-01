<?php

function power($num) {
    $arr = str_split($num);
    $len = count($arr);
    $numb = array();
    for ($i = 0; $i < count($arr); $i++) {
        $numb[$i] = $arr[$i] ** $len;
        if ($i == count($arr) - 1) {
            echo '(' . $arr[$i] . ' ^ ' . $len . ')' . ' = ';
        }
        else {
            echo '(' . $arr[$i] . ' ^ ' . $len . ')' . ' + ';
        }
    }
}

function narcissistic($num) {

    $arr = str_split($num);
    $len = count($arr);
    $numb = array();
    $i = 0;
    foreach ($arr as $item) {
        $numb[$i] = $item ** $len;
        $i++;
    }
    return $res = array_sum($numb);
}

function is_narcissistic($num, $res) {
    $n = (int) $num;
    if ($n == $res) {
        return true;
    }
    return false;
}
