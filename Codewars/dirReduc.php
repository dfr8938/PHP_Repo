<?php

$d = ['EAST', 'EAST', 'EAST', 'EAST', 'SOUTH', 'SOUTH', 'WEST', 'WEST', 'NORTH'];

function dirReduc($arr) {

    $hash = array_count_values($arr);
//    print_r($hash);

    $str = array();
    if (count($arr) == 0) {
        return $str = $hash;
    }
    if ($hash['NORTH'] == $hash['SOUTH'] && $hash['EAST'] > $hash['WEST']) {
        foreach ($hash as $key => $value) {
            if ($key != 'NORTH' && $key != 'SOUTH' && $key != 'WEST') {
                $str[] = $key;
            }
        }
    }
    elseif ($hash['NORTH'] == $hash['SOUTH'] && $hash['EAST'] < $hash['WEST']) {
        foreach ($hash as $key => $value) {
            if ($key != 'NORTH' && $key != 'SOUTH' && $key != 'EAST') {
                $str[] = $key;
            }
        }
    }
    elseif ($hash['NORTH'] < $hash['SOUTH'] && $hash['EAST'] == $hash['WEST']) {
        foreach ($hash as $key => $value) {
            if ($key != 'NORTH' && $key != 'WEST' && $key != 'EAST') {
                $str[] = $key;
            }
        }
    }
    elseif ($hash['NORTH'] > $hash['SOUTH'] && $hash['EAST'] == $hash['WEST']) {
        foreach ($hash as $key => $value) {
            if ($key != 'SOUTH' && $key != 'WEST' && $key != 'EAST') {
                $str[] = $key;
            }
        }
    }
    elseif ($hash['NORTH'] < $hash['SOUTH'] && $hash['EAST'] > $hash['WEST']) {
        foreach ($hash as $key => $value) {
            if ($key != 'NORTH' && $key != 'WEST') {
                $str[] = $key;
            }
        }
    }
    elseif ($hash['NORTH'] < $hash['SOUTH'] && $hash['EAST'] < $hash['WEST']) {
        foreach ($hash as $key => $value) {
            if ($key != 'NORTH' && $key != 'EAST') {
                $str[] = $key;
            }
        }
    }
    elseif ($hash['NORTH'] > $hash['SOUTH'] && $hash['EAST'] > $hash['WEST']) {
        foreach ($hash as $key => $value) {
            if ($key != 'SOUTH' && $key != 'WEST') {
                $str[] = $key;
            }
        }
    }
    elseif ($hash['NORTH'] > $hash['SOUTH'] && $hash['EAST'] < $hash['WEST']) {
        foreach ($hash as $key => $value) {
            if ($key != 'SOUTH' && $key != 'EAST') {
                $str[] = $key;
            }
        }
    }
    elseif ($hash['NORTH'] == $hash['SOUTH']) {
        foreach ($hash as $key => $value) {
            $str[] = $key;
        }
    }
    elseif ($hash['EAST'] == $hash['WEST']) {
        foreach ($hash as $key => $value) {
            $str[] = $key;
        }
    }
    elseif ($hash['EAST'] == $hash['SOUTH']) {
        foreach ($hash as $key => $value) {
            $str[] = $key;
        }
    }
    elseif ($hash['EAST'] == $hash['NORTH']) {
        foreach ($hash as $key => $value) {
            $str[] = $key;
        }
    }
    elseif ($hash['NORTH'] == $hash['WEST']) {
        foreach ($hash as $key => $value) {
            $str[] = $key;
        }
    }
    elseif ($hash['SOUTH'] == $hash['WEST']) {
        foreach ($hash as $key => $value) {
            $str[] = $key;
        }
    }
    elseif ($hash['EAST'] == $hash['WEST'] && $hash['NORTH'] == $hash['SOUTH'] && $hash['NORTH'] == $hash ['WEST']) {
        foreach ($hash as $key => $value) {
            return [];
        }
    }


    return $str;
}

dirReduc($d);