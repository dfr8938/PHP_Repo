<?php

//require_once "config/get_curl.php";
//
//$a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
//$b=["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH"];
//$c = ["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH","NORTH"];
//$d = ['EAST', 'EAST', 'EAST', 'EAST', 'SOUTH', 'SOUTH', 'WEST', 'WEST', 'NORTH'];
//

$e = ['WEST', 'NORTH', 'WEST'];

function dirReduc($arr) {

    $hash = array_count_values($arr);

//    show_arr($hash);

        $x = $hash['WEST'] - $hash['EAST'];
        $y = $hash['NORTH'] - $hash['SOUTH'];

//    echo $x . ' ' . $y;

        $output = array();
        if (count($hash) > 2) {
            return $arr;
        }
        if ($x < 0 && $y < 0) {
            foreach ($hash as $key => $value) {
                if ($key != 'WEST' && $key != 'NORTH') {
                    $output[] = $key;
                }
            }
        } elseif ($x > 0 && $y > 0) {
            foreach ($hash as $key => $value) {
                if ($key != 'EAST' && $key != 'SOUTH') {
                    $output[] = $key;
                }
            }
        } elseif ($x == 0 && $y > 0) {
            foreach ($hash as $key => $value) {
                if ($key != 'WEST' && $key != 'EAST' && $key != 'SOUTH') {
                    $output[] = $key;
                }
            }
        } elseif ($x == 0 && $y < 0) {
            foreach ($hash as $key => $value) {
                if ($key != 'WEST' && $key != 'EAST' && $key != 'NORTH') {
                    $output[] = $key;
                }
            }
        } elseif ($x > 0 && $y == 0) {
            foreach ($hash as $key => $value) {
                if ($key != 'EAST' && $key != 'NORTH' && $key != 'SOUTH') {
                    $output[] = $key;
                }
            }
        } elseif ($x < 0 && $y == 0) {
            foreach ($hash as $key => $value) {
                if ($key != 'WEST' && $key != 'NORTH' && $key != 'SOUTH') {
                    $output[] = $key;
                }
            }
        }
//    show_arr($output);
    return $output;
}
 print_r(dirReduc($e));