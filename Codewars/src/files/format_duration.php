<?php

require_once "../../config/help_func.php";

function format_duration($seconds) {

    $minutes = $seconds / 60;
    echo $minutes;
    $hours = 1440 / 60;
    echo $hours;
    $days = $hours / 24;
    echo $days;

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

    return $seconds;
}

format_duration("86400");
