<?php

function create_array(int $n) {
    return str_split((string) $n);
}

function expanded_form(int $n): string {
    // Your code here

    $arr = create_array($n);
    $len = count($arr);
    $zero = array();
    $j = '';
    for ($n = 0; $n < $len; $n++) {
        $j .= $arr[$n];
        for ($i = $len - 1; $i > $n; $i--) {
            $j .= '0';
        }
        if ($n < $len - 1) {
            $j .= ' + ';
        }
    }

    $sp = array_unique(explode('+', $j));
//    print_r($sp);



    $str = array();
    $i = 0;
    foreach ($sp as $item) {
        if ((int) $item != 0) {
            $str[$i] = (int)$item;
        }
        $i++;
    }

    $str = array_unique($str);

    $i = '';
    for ($n = 0; $n < count($str); $n++) {
        if ($n < count($str) - 1) {
            $i .= $str[$n] . ' + ';
        } else {
            $i .= $str[$n];
        }
    }

//    echo '<hr>';
//    print_r($str);
    return $i;
}

//expanded_form(70304);
