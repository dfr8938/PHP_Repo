<?php

    $serverName = "localhost";
    $user = "root";
    $password = "";
    $dbName = "newssite";

    $conn = mysqli_connect($serverName, $user, $password, $dbName);
    mysqli_set_charset($conn, "utf8");

    if (!$conn) {
        echo "<p>No connection</p>" . mysqli_connect_error();
    } //echo "<p>Connection</p>";

    // Добавить

    //$query = "INSERT INTO news_category VALUES (NULL, 'category3', 'description3', '1', '1')";
    //$into = mysqli_query($conn, $query);

    function del_el($id, $table, $conn) {
        mysqli_query($conn, "DELETE FROM $table" . " WHERE id=" . "$id");
    }

    //del_el(3, "news_category", $conn);