<?php

require_once "../../config/help_func.php";

function format_duration($seconds) {

    $times = [
        31536000,  // year
        86400,     // day
        3600,      // hour
        60         // minutes
    ];

    $d = floor($seconds/86400);
    $h = floor(($seconds%86400)/3600);
    $m = floor(($seconds%3600)/60);
    $s = $seconds%60;

    $str = '';

    if ($seconds > 86400) {
        $str .= $d . ' days, ' . $h . ' hour, ' . $m . '  minute and ' . $s . ' seconds';
    } elseif ($seconds == 86400) {
        $str .= $d . ' day';
    } elseif ($seconds > 3600 && $seconds < 86400) {
        $str .= $h . ' hour, ' . $m . ' minute and ' . $s . ' seconds';
    } elseif ($seconds == 3600) {
        $str .= $h . ' hour';
    } elseif ($seconds > 60 && $seconds < 3600 && $seconds % 60 != 0) {
        $str .= $m . ' minute and ' . $s . ' seconds';
    } elseif ($seconds >= 60 && $seconds % 60 == 0) {
        $str .= $m . ' minutes';
    } elseif ($seconds < 60 && $seconds != 0) {
        $str .= $s . ' second';
    } elseif ($seconds == 0) {
        $str .= 'now';
    }




//    $str = '';
//    if ($seconds % 60 == 0 && $seconds > 9 && $seconds < 3600) {
//        $str .= round($seconds / 60) . ' minutes';
//    } elseif ($seconds != 0 && $seconds < 10 && $seconds < 3600) {
//        $str .= $seconds . ' second';
//    } elseif ($seconds >= 3600 && $seconds % 60 == 0 && $seconds < 86400) {
//        $str .= (round($seconds / 60) / 60) . ' hour';
//    } elseif ($seconds > 3600 && $seconds < 86400) {
//        $str .= (round(($seconds / 60) / 60)) . ' hour, ' . round(round(($seconds / 60) / 60)) . ' minute and ' . $seconds % 10 . ' seconds';
//    } elseif ($seconds == 0) {
//        $str .= 'now';
//    } elseif ($seconds >= 86400) {
//        $str .= (round($seconds  / 60) / 3600). ' days';
//    } else {
//        $str .= (round($seconds / 60)) . ' minute and ' . ($seconds % 10) . ' seconds';
//    }

    return $str;
}

//format_duration(3662);
