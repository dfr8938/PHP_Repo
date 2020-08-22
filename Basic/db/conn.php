<?php

    $serverName = "localhost";
    $user = "root";
    $password = "";
    $dbName = "newssite";

    $conn = mysqli_connect($serverName, $user, $password, $dbName);

    if (!$conn) {
        echo "<p>No connection</p>";
    } //echo "<p>Connection</p>";