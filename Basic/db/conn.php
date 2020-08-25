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

    // Удалить
    function f_delete($id, $table, $connect) {
        mysqli_query($connect, "DELETE FROM $table" . " WHERE id=" . "$id");
    }

    //f_delete(3, "news_category", $connect);

    // Обновить

//    $tab = "news";
//    $query = "UPDATE $tab SET status=0 WHERE 'id'=1";
//    $query = "UPDATE $tab SET h1='Hello world!!!' WHERE 'id'=2";
//    $info = mysqli_query($connect, $query);
//    var_dump($info);
//
//    $count = mysqli_affected_rows($connect);
//    echo $count;

    // Выборка

    $tab = "news";
    $query = "SELECT 'id', 'content' FROM $tab";
    $info = mysqli_query($connect, $query);
    echo '<pre>';
    var_dump($info);
    echo '</pre>';