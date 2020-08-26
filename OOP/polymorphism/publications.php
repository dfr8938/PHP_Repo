<?php

require_once "data.php";

foreach ($publications as $s) {

    echo '<h3 style="font-family: Arial, sans-serif">Класс объекта: <span style="font-style: italic; color: brown;">' . get_class($s) . '</span></h3>';
    echo $s->printItem();
    echo '<hr>';
}