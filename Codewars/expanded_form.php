<?php

function create_array(int $n) {
    return str_split((string) $n);
}

function expanded_form(int $n): string
{
    // Your code here

    $arr = create_array($n);
    $len = count($arr);
    $j = '';
    for ($n = 0; $n < $len; $n++) {
        $j .= $arr[$n];
        for ($i = $len - 1; $i > $n; $i--) {
            $j .= '0';
        }
        if ($n < $len - 1) {
            $j .= ' + ';
        }
    }

    $sp = array_unique(explode('+', $j));

    $str = array();
    $i = 0;
    foreach ($sp as $item) {
        $str[$i] = (int)$item;
        $i++;
    }

    $i = 0;
    $arr = array();
    $str = array_unique($str);
    foreach ($str as $item) {
        if ($item != 0) {
            $arr[$i] = $item;
            $i++;
        }
    }

    $str = '';
    $i = 0;
    foreach ($arr as $item) {
        if ($i != count($arr) - 1) {
            $str .= $item . ' + ';
        } else {
            $str .= $item;
        }
        $i++;
    }

    return $str;
}
