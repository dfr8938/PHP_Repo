<?php

//require_once "config/help_func.php";
//
//$arr = [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5];

function findIt(array $seq) : int
{
    // Enter your code here

//    show_arr($seq);

    $hash = array_count_values($seq);
//    show_arr($hash);

    $output = 0;
    foreach ($hash as $key => $value) {
        if ($value % 2 != 0) {
            $output = (int) $key;
        }
    }

    return $output;
}
//
//findIt($arr);
