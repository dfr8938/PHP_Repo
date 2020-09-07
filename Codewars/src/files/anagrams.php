<?php

require_once "../../config/help_func.php";

function equality(string $word1, string $word2) {
    $uniq1 = array_count_values(str_split($word1));
    $uniq2 = array_count_values(str_split($word2));
    if ($uniq1 == $uniq2) {
        return 1;
    } else {
        return 0;
    }
}

function anagrams(string $word, array $words): array {

    $arr = array();
    $i = 0;
    foreach ($words as $w) {
        if (equality($word, $w) == 1) {
            $arr[$i] = $w;
            $i++;
        }
    }

    return $arr;
}
