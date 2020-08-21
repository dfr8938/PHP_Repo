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

<?php
    $add = 0;
    $diff = 0;
    $multi = 1;
    $div = 0;

    for ($i = 1; $i < 10; $i++) {
        $add += $i;
        $diff -= $i;
        $multi *= $i;
    }

    $div = $multi / $add;

    echo "<p>Сумма: " . $add . "</p>";
    echo "<p>Разница: " . $diff . "</p>";
    echo "<p>Произведение: " . $multi . "</p>";
    echo "<p>Деление: " . $div . "</p>";

    $div = $multi % $add;

    echo "<p>Остаток от деления: " . $div . "</p>";

?>

</body>
</html>
