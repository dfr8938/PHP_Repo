<?php

require_once "connect.php";
require_once "classes.php";

$publications = array();

$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
if (!$conn) echo mysqli_connect_error();

$table = "publication";
$result = mysqli_query($conn, "SELECT * FROM $table");

while($row = mysqli_fetch_array($result)) {
    $publications[] = new $row['type']($row);
}