<?php

function output_rom_number($elOne, $elTwo, $elThree)
{
    for ($n = 1; $n < 4; $n++) {
        for ($j = 0; $j < $n; $j++) {
            echo $elOne;
        }
        echo '<br>';
    }

    echo $elOne . $elTwo . '<br> ';
    echo $elTwo . '<br>';

    for ($n = 1; $n < 4; $n++) {
        echo $elTwo;
        for ($j = 0; $j < $n; $j++) {
            echo $elOne;
        }
        echo '<br>';
    }

    echo $elOne . $elThree . '<br>';
}

function output_number_unit($start, $end)
{
    for ($i = $start; $i < $end; $i++) {
        echo $i . '<br>';
    }
}

function output_number($start, $end, $redness)
{
    for ($i = $start; $i < $end; $i++) {
        if ($i % $redness == 0) {
            echo $i . '<br>';
        }
    }
}

function roman_date($num) {
    $arr = str_split($num);
    $len = count($arr);
    $unit = ['I', 'V', 'X', 'L', 'C', 'D', 'M',];
    // 1000
    if ($len > 3) {
        if ($arr[0] <= 3) {
            for ($n = 0; $n < $arr[0]; $n++) {
                echo $unit[6];
            }
        } elseif ($arr[0] > 3 && $arr[0] < 5) {
            echo $unit[6] . $unit[1];
        } elseif ($arr[0] <= 5) {
            echo $unit[1];
        } elseif ($arr[0] > 5 && $arr[0] < 9) {
            echo $unit[1];
            for ($n = 1; $n < $arr[0] - 4; $n++) {
                echo $unit[6];
            }
        } else {
            echo $unit[6] . $unit[2];
        }

//    //100
    if ($arr[1] <= 3) {
        for ($n = 0; $n < $arr[1]; $n++) {
            echo $unit[4];
        }
    } elseif ($arr[1] > 3 && $arr[1] < 5) {
        echo $unit[4] . $unit[5];
    } elseif ($arr[1] <= 5) {
        echo $unit[5];
    } elseif ($arr[1] > 5 && $arr[1] < 9) {
        echo $unit[5];
        for ($n = 1; $n < $arr[1] - 4; $n++) {
            echo $unit[4];
        }
    } else {
        echo $unit[4] . $unit[6];
    }

//    //10
    if ($arr[2] <= 3) {
        for ($n = 0; $n < $arr[2]; $n++) {
            echo $unit[2];
        }
    } elseif ($arr[2] > 3 && $arr[2] < 5) {
        echo $unit[2] . $unit[3];
    } elseif ($arr[2] <= 5) {
        echo $unit[3];
    } elseif ($arr[2] > 5 && $arr[2] < 9) {
        echo $unit[3];
        for ($n = 1; $n < $arr[2] - 4; $n++) {
            echo $unit[2];
        }
    } else {
        echo $unit[2] . $unit[4];
    }

//    //1
    if ($arr[3] <= 3) {
        for ($n = 0; $n < $arr[3]; $n++) {
            echo $unit[0];
        }
    } elseif ($arr[3] > 3 && $arr[3] < 5) {
        echo $unit[0] . $unit[1];
    } elseif ($arr[3] <= 5) {
        echo $unit[1];
    } elseif ($arr[3] > 5 && $arr[3] < 9) {
        echo $unit[1];
        for ($n = 1; $n < $arr[3] - 4; $n++) {
            echo $unit[0];
        }
    } else {
        echo $unit[0] . $unit[2];
    }
    }
}