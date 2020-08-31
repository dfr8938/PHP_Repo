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

    $unit = array(
        ['I', 'V', 'X'],
        ['X', 'L', 'C'],
        ['C', 'D', 'M'],
        ['M', 'V', 'X'],
    );

    if ($len >= 1) {

        for ($i = 0, $j = $len - 1; $i < count($arr), $j >= 0; $i++, $j--) {
            if ($arr[$i] <= 3) {
                for ($n = 0; $n < $arr[$i]; $n++) {
                    echo $unit[$j][0];
                }
            } elseif ($arr[$i] > 3 && $arr[$i] < 5) {
                echo $unit[$j][0] . $unit[$j][1];
            } elseif ($arr[$i] <= 5) {
                echo $unit[$j][1];
            } elseif ($arr[$i] > 5 && $arr[$i] < 9) {
                echo $unit[$j][1];
                for ($n = 1; $n < $arr[$i] - 4; $n++) {
                    echo $unit[$j][0];
                }
            } else {
                echo $unit[$j][0] . $unit[$j][2];
            }
        }
    }
}