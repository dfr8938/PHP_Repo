<?php

function rar(array $data, string $k): array {
    $arr1 = array();
    foreach ($data as $key => $value) {
        if ($key == $k) {
            $arr1[] = $value;
        }
    }

    $arr2 = array();
    foreach ($arr1 as $item) {
        foreach ($item as $key => $value) {
            $arr2[$key] = $value;
        }
    }

    return $arr2;
}