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
function arr_val($arr) {
    $s = array();
    foreach ($arr as $key => $value) {
        if ($key != ' ' && $key != ucfirst($key) && $key != ',') {
            $s[] = str_repeat($key, (int) $value) . '/';
        }
    }
    return $s;
}

// значения для хеша(без повторений)
function arr_val_unit($arr) {
    $s = array();
    foreach ($arr as $key => $value) {
        if ($key != ' ' && $key != ucfirst($key) && $key != ',') {
            $s[] = $key . '/';
        }
    }
    return $s;
}

// формирование хеша
function hash_key_val($arr1, $arr2) {
    $s = array();
    for ($i = 0; $i < count($arr1); $i++) {
        $s[($arr2[$i] - 1) . ' ' . $arr1[$i]] = $arr2[$i] - 1;
    }
    return $s;
}

// сортировка массива(хеша)
function hash_output($s1) {
    $str = hash_str($s1);
    $s1 = arr_val($str);
    $s2 = arr_key($s1);
    $str = hash_key_val($s1, $s2);
    ksort($str);
    return $str;
}

// сортировка массива(хеша)
function hash_output_unit($s1) {
    $str = hash_str($s1);
    $s1 = arr_val_unit($str);
    $s2 = arr_key($s1);
    $str = hash_key_val($s1, $s2);
    ksort($str);
    return $str;
}

function hash_output_sort($hash) {
    $s1 = array();
    foreach ($hash as $key => $value) {
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
    foreach ($hash as $key => $value) {
        $s[] = $value;
    }

    $hash = array();
    for ($i = 0; $i < count($s); $i++) {
        $hash[$s1[$i]] = $s[$i];
    }

    return $hash;
}

function mix($s1, $s2) {

    $str = '';

//    show_arr(hash_output($s1));
//    show_arr(hash_output($s2));

    $hash1 = hash_output_sort(hash_output($s1));
    show_arr($hash1);
    $hash2 = hash_output_sort(hash_output($s2));
    show_arr($hash2);

    $h_u1 = hash_output_sort(hash_output_unit($s1));
    show_arr($h_u1);
    $h_u2 = hash_output_sort(hash_output_unit($s2));
    show_arr($h_u2);


    $a = array();
    $b = array();
    foreach ($h_u1 as $key => $value) {
        $a[] = $key;
    }
    foreach ($h_u2 as $key => $value) {
        $b[] = $key;
    }

    show_arr($a);
    show_arr($b);

    return $str;
}

$s1 = "Are they here";
$s2 = "yes, they are here";
mix($s1, $s2);
