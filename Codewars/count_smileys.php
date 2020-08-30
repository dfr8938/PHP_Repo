<?php

$arr = []; // 0
$arr1 = [':D',':~)',';~D',':)']; // 4
$arr2 = [':)',':(',':D',':O',':;']; // 2
$arr3 = [';]', ':[', ';*', ':$', ';-D']; // 1
$arr4 = [':)', ';(', ';}', ':-D']; // 2
$arr5 = [';D', ':-(', ':-)', ';~)']; // 3
$arr6 = [';]', ':[', ';*', ':$', ';-D']; // 1

function count_smileys($arr)
{
    $pattern = [
        ':D', ':)', ';D', ';)',
        ':-D', ':-)', ';-D', ';-)',
        ':~D', ':~)', ';~D', ';~)',
    ];

    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($pattern); $j++) {
            if ($pattern[$j] == $arr[$i]) {
                $count++;
            }
        }
    }

    return $count;
}

echo 'Проверка:<hr>';
echo count_smileys($arr) . ' = 0<hr>';
echo count_smileys($arr1) . ' = 4<hr>';
echo count_smileys($arr2) . ' = 2<hr>';
echo count_smileys($arr3) . ' = 1<hr>';
echo count_smileys($arr4) . ' = 2<hr>';
echo count_smileys($arr5) . ' = 3<hr>';
echo count_smileys($arr6) . ' = 1<hr>';