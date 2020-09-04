<?php

require_once "config/help_func.php";

// ключи для хэша
function arr_key($arr) {
    $s = array();
    foreach ($arr as $item) {
        $s[] = count(str_split($item));
    }
    return $s;
}

// значения для хеша
function arr_val($arr, $i = 1) {
    $s = array();
    foreach ($arr as $key => $value) {
        if ($key != ' ' && $key != ucfirst($key) && $key != ',') {
            $s[] = $i . ':' . str_repeat($key, (int) $value) . '/';
        }
    }
    return $s;
}

// формирование хеша
function hash_key_val($arr1, $arr2) {
    $s = array();
    for ($i = 0; $i < count($arr1); $i++) {
        $s[($arr2[$i] - 2) . ' ' . $arr1[$i]] = $arr2[$i] - 2;
    }
    return $s;
}

// сортировка массива(хеша)
function hash_output($s1, $i = 1) {
    $str = hash_str($s1);
    $s1 = arr_val($str, $i);
    $s2 = arr_key($s1);
    $str = hash_key_val($s1, $s2);
    ksort($str);
    return $str;
}

function mix($s1, $s2) {

    $str = '';

    $arr1 = hash_output($s1);

    $s1 = array();
    foreach ($arr1 as $key => $value) {
        $s1[] = $key;
    }

    $s = array();
    $j = 0;
    foreach ($s1 as $item) {
        $a = str_split($item);
        $len = count(str_split($item));
        for ($i = 0; $i < $len; $i++) {
            if ($i != 0 && $i != 1) {
                $s[$j] = $a[$i];
                $j++;
            }
        }
    }

    $s1 = '';
    foreach ($s as $item) {
        $s1 .= $item;
    }

    $s = array();
    $s = explode('/', $s1);

    // key
    $s1 = array();
    foreach ($s as $item) {
        if ($item != null) {
            $s1[] = $item;
        }
    }

    // value
    $s = array();
    foreach ($arr1 as $key => $value) {
        $s[] = $value;
    }

    $arr1 = array();
    for ($i = 0; $i < count($s); $i++) {
        $arr1[$s1[$i]] = $s[$i];
    }

    show_arr($arr1);
    show_arr($s);
    show_arr($s1);

//    $arr2 = hash_output($s2, $i = 2);
//
//    $s2 = array();
//    foreach ($arr2 as $key => $value) {
//        $s2[] = $key;
//    }
//    show_arr($s2);

    return $str;
}

$s1 = "Are they here";
$s2 = "yes, they are here";
mix($s1, $s2);
