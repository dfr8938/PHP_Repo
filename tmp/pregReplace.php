<?php

$string = '08:00 22-01-1989';
echo 'Исходная строка: ' . $string . '<br>';

$pattern = '/([0-9]{2}):([0-9]{2}) ([0-9]{2})-([0-9]{2})-([0-9]{4})/';

$newString = preg_match($pattern, $string);
if ($newString) echo 'yes';
else echo 'no';

$replacenment = '$1:$2 $4-$3-$5';
echo '<hr>';
echo preg_replace($pattern, $replacenment, $string);