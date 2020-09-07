<?php

require_once "../../config/help_func.php";

function alphanumeric(string $s): bool {

    foreach (str_split($s) as $a) {
        if (!($a >= 'a' && $a <= 'z') && !($a >= 'A' && $a <= 'Z') && !($a >= '0' && $a <= '9')) {
            return false;
        }
    }

    return true;
}

alphanumeric('Mazinkaiser');
