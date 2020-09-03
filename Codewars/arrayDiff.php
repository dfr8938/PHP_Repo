<?php

function arrayDiff($a, $b) {

    $c = array();
    if ($b != null) {
        foreach ($a as $item_a) {
            foreach ($b as $item_b) {
                if ($item_a == $item_b) {
                    $item_a = 0;
                }
            }
            if ($item_a != 0) {
                $c[] = $item_a;
            }
        }
    } else {
        return $a;
    }

    return $c;
}