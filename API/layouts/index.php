<?php

require_once "../weather.php";
require_once "..";
require_once "../config/help_func.php";

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

    <h3><?php echo $data['name'] ?></h3>

    <?php

    $main = rar($data, 'main');
    $weather = rar($data, 'weather');

    $icon = $weather[0]['icon'];
    echo  date('l');

    echo "<p>температура: " . ceil($main['temp']) . '&deg;' . 'C' . "</p>";
    echo "<img src='https://openweathermap.org/img/wn/$icon@2x.png' alt='weather'>";
    ?>



</body>
</html>
