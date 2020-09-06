<?php

function generateHashtag($str)
{
    $arr = explode(' ', $str);
    $a = '';
    foreach ($arr as $item) {
        if ($item != ' ') {
            $a .= ucfirst($item);
        }
    }

    if ($a != '') {
        $arr_a = str_split($a);
        $a = '#';
        foreach ($arr_a as $item) {

            $a .= $item;
        }
        $str1 = $a;
        if (count(str_split($a)) > 140) {
            return false;
        }
    } else {
        return false;
    }

    return $a;
}