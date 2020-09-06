<?php

//require_once "config/get_curl.php";

function part_word($str, $ending) {

    $str_arr = array_reverse(str_split($str));
    $ending_arr = array_reverse(str_split($ending));
    $len_arr_ending = count($ending_arr);
    $len_arr_str = count($str_arr);

    if ($len_arr_ending > $len_arr_str) {
        return false;
    }
//    show_arr($str_arr);
//    show_arr_len($str_arr);
//    show_arr($ending_arr);
//    show_arr_len($ending_arr);

    $s1 = '';
    $s2 = '';
    for ($i = 0; $i < $len_arr_ending; $i++) {
        $s1 .= $str_arr[$i];
    }
    foreach ($ending_arr as $item) {
        $s2 .= $item;
    }

    if ($s1 != $s2 && $s2 != '') {
        return false;
    } elseif ($s2 == '') {
        return true;
    }

    return true;
}

//$str = "samurai";
//$ending = "ai";
//
//part_word($str, $ending);