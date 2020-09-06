<?php

require_once "config/func_narcissistic.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="wrap">
        <h3>Введите число:</h3>
        <form action="narcissistic.php" method="get">
            <input type="text" name="number">
            <input type="submit" name="submit">
            <input type="reset" name="reset">
        </form>
        <p>Введеное вами число:
            <?php
                if (!isset($_GET['number']) && !isset($_GET['submit'])) {
                    echo 0;
                } else {
                    echo $_GET['number'];
                }
            ?>
        </p>
        <p>
            <?php
            if (!isset($_GET['number']) && !isset($_GET['submit'])) {
                echo 0;
            } else {
                echo power($_GET['number']) . narcissistic($_GET['number']);
            }
            ?>
        </p>
        <p>Число
            <?php
                if (!isset($_GET['number']) && !isset($_GET['submit'])) {
                    echo 0;
                } else {
                    echo $_GET['number'];
                }
            ?>
            является "чилом армстронга"?
        </p>
        <p>
            <?php
            if (isset($_GET['submit'])) {
                if (is_narcissistic(isset($_GET['number']), narcissistic(isset($_GET['number']))) == 1) {
                    echo 'Да';
                }
                else {
                    echo 'Нет';
                }
            }
            else {
                echo 'Нет';
            }
            ?>
        </p>

    </div>

</body>
</html>
