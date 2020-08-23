<?php

    define('SERVER', "localhost");
    define('USER', "root");
    define('PASS', "");
    define('DB', "newssite");

    function f_con($server, $user, $password, $dbName) {
       return mysqli_connect($server, $user, $password, $dbName);
    }

    $connect = f_con(SERVER, USER, PASS, DB);
    mysqli_set_charset($connect, "utf8");

    if (!$connect) {
        echo 'No connection' . mysqli_connect_error();
    }

    // Добавить

    //$query = "INSERT INTO news_category VALUES (NULL, 'category3', 'description3', '1', '1')";
    //$into = mysqli_query($connect, $query);

    function f_delete($id, $table, $connect) {
        mysqli_query($connect, "DELETE FROM $table" . " WHERE id=" . "$id");
    }

    f_delete(3, "news_category", $connect);