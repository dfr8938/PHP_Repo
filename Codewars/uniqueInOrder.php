<?php

    function uniqueInOrder($iterable){

        if (gettype($iterable) == string) {
            $iterable = str_split($iterable);
        }

        $j = 0;
        $n = 0;
        $len = count($iterable);

        $ret = array();
        for ($i = 0; $i < $len; $i++) {
            if ($iterable[$i] == $iterable[$i + 1]) {
                unset($iterable[$i]);
                $j++;
            }
            else {
                $ret[$n] = $iterable[$i];
                $n++;
            }
        }

        return $ret;
    }