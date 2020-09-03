<?php

function smallest($n) {
    // your code

    echo 'input: ' . $n . '<hr>';
    $arr = str_split($n);

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    echo '<hr>';

    $min = min($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($min == $arr[$i]) {
            break;
        }
    }
    $position = $i;
    echo 'min value: ' . $min . '<hr>';
    echo 'position min value: ' . $i . '<hr>';

    $start = array();
    for ($i = 0; $i < $position; $i++) {
        $start[$i] = $arr[$i];
    }

    echo '<pre>';
    print_r($start);
    echo '</pre>';
    echo '<hr>';

    foreach ($start as $item) {
        if ($item > $min) {
            $i = $item;
            break;
        }
    }
    for ($j = 0; $j < count($start); $j++) {
        if ($i == $start[$j]) {
            break;
        }
    }
    echo "position $i: " . $j;
    $position1 = $j;
    $numb = $start[$position1];

    $output = array();
    $output[$j] = $min;
    for ($n = 0; $n < count($arr); $n++) {
        if ($arr[$n] != $min) {
            $output[$j + 1] = $arr[$n];
            $j++;
        }
    }

    echo '<pre>';
    print_r($output);
    echo '</pre>';
    echo '<hr>';

    $i = '';
    foreach ($output as $item) {
        $i .= $item;
    }

    $output = array();

    $output[0] = $i;
    $output[1] = $position;
    $output[2] = $position1;

    echo '<pre>';
    print_r($output);
    echo '</pre>';
    echo '<hr>';

    return $n;
}

$n = 261235;
$n1 = 209917;
$n2 = 285365;
smallest($n2);
