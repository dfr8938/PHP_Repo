<?php

    $serverName = "localhost";
    $user = "root";
    $password = "";
    $dbName = "newssite";

    $conn = mysqli_connect($serverName, $user, $password, $dbName);

    if (!$conn) {
        echo "<p>No connection</p>" . mysqli_connect_error();
    } //echo "<p>Connection</p>";