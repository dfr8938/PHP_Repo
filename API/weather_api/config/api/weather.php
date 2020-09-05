<?php

/*
 * {
        "id": 542415,
        "name": "Krasnodarskiy Kray",
        "state": "",
        "country": "RU",
        "coord": {
            "lon": 40.0,
            "lat": 45.0
        }
    },
    {
        "id": 542420,
        "name": "Krasnodar",
        "state": "",
        "country": "RU",
        "coord": {
            "lon": 38.976944,
            "lat": 45.03278
        }
    },
 */

define('URL', 'https://api.openweathermap.org/data/2.5/weather');

$options = [
    "id" => 542420,
    "appid" => "fffdc7a04791ecdc2394703b484d03fe",
    "name" => "Krasnodar",
    "state" => "",
    "country" => "RU",
    "coord" => [
        "lon" => 38.976944,
        "lat" => 45.03278,
    ],
    "units" => "metric",
    "lang" => "en",
];

$cu = curl_init();
curl_setopt($cu, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($cu, CURLOPT_URL, URL . '?' . http_build_query($options));

$res = curl_exec($cu);
$data = json_decode($res, true);
curl_close($cu);