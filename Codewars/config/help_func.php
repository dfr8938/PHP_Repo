<?php

function show_arr($arr) {

    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    echo '<hr>';
}

function show_arr_len($arr) {

    echo 'length: ' . count($arr);

    echo '<hr>';
}