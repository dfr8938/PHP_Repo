<?php

require_once "../../config/api/weather.php";
require_once "../../config/enum/day.php";
require_once "../../config/functions/help_func.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheets/style.css">
</head>
<body>

<div class="wrap">

    <?php

    $weather = rar($data, 'weather');
    $icon = $weather[0]['icon'];
    if ($icon == '10d') {
        echo '<div class="block_weather" style="background-image: url(../images/rain.jpg);">';
    } elseif ($icon == '11d') {
        echo '<div class="block_weather" style="background-image: url(../images/storm.jpeg);">';
    } elseif ($icon == '01d') {
        echo '<div class="block_weather" style="background-image: url(../images/sun.jpg);">';
    } else {
        echo '<div class="block_weather" style="background: darkkhaki;">';
    }
    ?>
    <div class="screen">
            <div class="header_title">
                <h3>
                    <?php
                    if ($data['name'] == 'Krasnodar') {
                        echo 'Погода в Краснодаре';
                    } else {
                        echo 'Погода в ' . $data['name'];
                    }
                    ?>
                </h3>
            </div>
            <div class="time">
                <?php
                $t = getdate();
                if ($t['minutes'] < 10) {
                    $time_now = $t['hours'] . ':0' . $t['minutes'];
                } else {
                    $time_now = $t['hours'] . ':' . $t['minutes'];
                }

                ?>
                <p><?php echo $day[date('l')] . ' ' . $time_now ?></p>
            </div>
            <div class="spacer">

            </div>
            <div class="cels">
                <div class="temp_value">
                    <?php $main = rar($data, 'main') ?>
                    <p id="degree">
                        <?php
                        if ($main['temp'] > 0) {
                            echo '+' . ceil($main['temp']);
                        } else {
                            echo ceil($main['temp']);
                        }
                        ?>
                    </p>
                </div>
                <div class="temp_unit">
                    <p> &deg; </p>
                </div>
                <div class="capture">
                    <img src='<?php echo "https://openweathermap.org/img/wn/$icon@2x.png" ?>' alt='capture'>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
