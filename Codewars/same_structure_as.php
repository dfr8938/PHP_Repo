<?php

require_once "config/help_func.php";

function empty_arr($arr) {
    $x = array();
    foreach ($arr as $item) {
        if (gettype($item) == 'array') {
            foreach ($item as $i) {
                $x[] = gettype($i);
            }
        } else {
            $x[] = gettype($item);
        }
    }
    return $x;
}

function is_str_arr($arr) {
    foreach ($arr as $item) {
        if ($item == 'string') {
            return 0;
        }
    }
    return 1;
}

function same_structure_as(array $a, array $b): bool {

//    show_arr($a);
//    show_arr($b);

    $len_a = count($a);
    $len_b = count($b);

    $s1 = '';
    if (is_str_arr(empty_arr($a)) == 0) {
        foreach ($a as $item) {
            if (gettype($item) != 'array') {
                $s1 .= gettype($item);
            }
        }
    } else {
        foreach ($a as $item) {
            $s1 .= gettype($item);
        }
    }

    $s2 = '';
    if (is_str_arr(empty_arr($b)) == 0) {
        foreach ($b as $item) {
            if (gettype($item) != 'array') {
                $s2 .= gettype($item);
            }
        }
    } else {
        foreach ($b as $item) {
            $s2 .= gettype($item);
        }
    }

//    show_arr(empty_arr($a));
//    echo '<hr>';
//    show_arr(empty_arr($b));

//    echo '<hr>';
//    echo '<hr>';
//
//    echo $s1;
//    echo '<hr>';
//    echo $s2;

    $a1 = '';
    if (is_str_arr(empty_arr($a)) == 0) {
        foreach (empty_arr($a) as $item) {
            if ($item != 'string') {
                $a1 .= $item;
            }
        }
    }

    $b1 = '';
    if (is_str_arr(empty_arr($b)) == 0) {
        foreach (empty_arr($b) as $item) {
            if ($item != 'string') {
                $b1 .= $item;
            }
        }
    }

//    echo '<hr>';
//    show_arr($a1);
//    echo '<hr>';
//    show_arr($b1);

//    if ($len_a == $len_b && $s1 == $s2 && $a1 == $b1) {
//        echo 't';
//        return true;
//    } elseif ($len_a == $len_b && $s1 == $s2 && empty_arr($a) == empty_arr($b)) {
//        echo 't';
//        return true;
//    }

    $a2 = empty_arr($a);
    $b2 = empty_arr($b);

    if ($len_a < 2 && $len_a == $len_b) {
        for ($i = 0; $i < count(empty_arr($a)); $i++) {
            if ($a2[$i] != $b2[$i]) {
                echo 'f';
                return false;
            }
        }
    } elseif ($len_a >= 2 && $len_a == $len_b) {
        if ($a1 != $b1) {
            echo 'f';
            return false;
        } elseif ($s1 != $s2) {
            echo 'f';
            return false;
        }
    }

//    echo 't';
    return true;
}
//
$a = [[[], []]];
$b = [[1, 1]];
//$a = [1, [',']];
//$b = [[','],1];
//$a = [1, [1, 1]];
//$b = [[2, 2], 2];
////
same_structure_as($a, $b);
