<?php

$str = ['a','b','c','d','f'];
$str1 = ["O", "Q", "R", "S"];


function find_missing_letter(array $str)
{
    $arr = array();

    for ($i = $str[0], $j = 0; $j < count($str); $i++, $j++) {
        $arr[$j] = $i;
    }

    print_r($arr);
    echo '<hr>';

    // ["O", "Q", "R", "S"]
    // ["O", "P", "R", "S"]
    $output = array();
    for ($i = 0; $i < count($str); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$j] != $str[$j]) {
                $output = $arr[$j];
                break;
            }
        }
    }

    return $output[0];
}

echo 'Output: ' . find_missing_letter($str);
echo '<hr>';
echo 'Output: ' . find_missing_letter($str1);


