<?php

$word = 'din';
$word1 = 'recede';
$word2 = 'Success';

function duplicate_encode($word) {

    $s = strtolower($word);
    echo $s . '<hr>';
    $arr = str_split($s);
    $output = array();
    $i = 0;
    foreach ($arr as $item) {
        $output[$i] = substr_count($s, $item);
        $i++;
    }

    $i = 0;
    foreach ($output as $item) {
        if ($item > 1) {
            $item = ')';
            $output[$i] = $item;
        }
        else {
            $item = '(';
            $output[$i] = $item;
        }
        $i++;
    }
    $str = '';
    foreach ($output as $item) {
        $str .= $item;
    }
    print_r($output);
    echo '<hr>' . $str;
}

duplicate_encode($word2);

