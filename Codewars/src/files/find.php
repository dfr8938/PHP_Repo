<?php

function find($integers) {

    $even = array();
    $odd = array();
    foreach ($integers as $integer) {
        if ($integer % 2 == 0) {
            $even[] = $integer;
         } else {
            $odd[] = $integer;
        }
    }

    if (count($even) > count($odd)) {
        return $odd[0];
    }
    return $even[0];
}