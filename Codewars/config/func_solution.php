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

function one_to_three($a, $b) {
    $c = '';
    for ($n = 0; $n < $b; $n++) {
        $c .= $a;
    }
    return $c;
}

function six_to_eight($a, $b, $d) {
    $c = $d;
    for ($n = 1; $n < $b - 4; $n++) {
        $c .= $a;
    }
    return $c;
}

function roman_date($num) {
    $arr = str_split($num);
    $len = count($arr);
    $result = '';

    $unit = array(
        ['I', 'V', 'X'],
        ['X', 'L', 'C'],
        ['C', 'D', 'M'],
        ['M', 'V', 'X'],
    );

    if ($len >= 1) {

        $out = '';
        for ($i = 0, $j = $len - 1; $i < count($arr), $j >= 0; $i++, $j--) {
            if ($arr[$i] <= 3) {
                $out .= one_to_three($unit[$j][0], $arr[$i]);
            } elseif ($arr[$i] > 3 && $arr[$i] < 5) {
                $out .= ($unit[$j][0] . $unit[$j][1]);
            } elseif ($arr[$i] <= 5) {
                $out .= $unit[$j][1];
            } elseif ($arr[$i] > 5 && $arr[$i] < 9) {
                $out .= six_to_eight($unit[$j][0], $arr[$i], $unit[$j][1]);
            } else {
                $out .= ($unit[$j][0] . $unit[$j][2]);
            }
        }

        $result .= $out;
    }
    return $result;
}