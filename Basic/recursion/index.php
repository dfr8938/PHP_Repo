<?php

$menu = [

    "Автотехника" => [                                  // 1
        "Вело" => [                                     // 2
            "Велосипеды" => [                           // 3
                "(товар) Extreme" => 10,                // 4
                "(товар) Author" => 4,                  // 4
            ],
            "Самокаты" => 12,                           // 3
        ],
        "Авто" => [                                     // 2
            "Opel" => [                                 // 3
                "(товар) Astra" => 5,                   // 4
            ],
            "(товар) Honda" => 10,                      // 3
            "(товар) Audi" => 11,                       // 3
        ],
        "(товар) Аксессуары" => 7,                      // 2
    ],

    "Фототехника" => [                                  // 1
        "(товар) Фотокамеры" => 6,                      // 2
        "(товар) Видеокамеры" => 3,                     // 2
    ],

    "(товар) Другое" => 3,                              // 1
];

var_dump(is_array($menu));
echo "<br>";
var_dump(is_array(11));
echo "<br>";

function ft_count($arr, $lvl = 0) {
    static $count;
    static $items;
    if (is_array($arr)) {
        $lvl++;
        foreach ($arr as $el) {
            ft_count($el, $lvl);
        }
    }
    else {
        $count++;
        $items += $arr;
    }
    return $array = ["count" => $count, "items" => $items];
}

$result = ft_count($menu);
echo "<pre>";
print_r($result);
echo "</pre>";
