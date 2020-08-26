<?php

    define('SERVER', "localhost");
    define('USER', "root");
    define('PASSWORD', "");
    define('DB', "test");

    $conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
    if (!$conn) echo mysqli_connect_error();
