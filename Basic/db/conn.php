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