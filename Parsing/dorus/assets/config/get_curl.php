<?php

function get_curl($url, $user_agent, $ref) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
    curl_setopt($ch, CURLOPT_REFERER, $ref);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_PROXY_SSL_VERIFYPEER, FALSE);
    $res = curl_exec($ch);
    curl_close($ch);
    return $res;
}

function min_str($str) {
    $s = '';
    $arr = str_split($str);
    for ($i = 0; $i < count($arr) - 4; $i++) {
        $s .= $arr[$i];
    }
    return $s;
}

function acc_arr($html) {
    $dom = str_get_html($html);
    $links = $dom->find('.sheader');

    $a = array();
    foreach ($links as $link) {
        $text = $link->find('a', 0);
        $href = $text->href;
        $price = $link->find('div', 0);
        $p = min_str($price->innertext);
        if ($p != null) {
            $a["<a href='$href'>$text</a>"] = $p;
        } else {
            $a["<a href='$href'>$text</a>"] = 0;
        }
    }

    return $a;
}