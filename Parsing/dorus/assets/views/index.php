<?php

require_once "../config/get_curl.php";
require_once "../../config/lib/simple_html_dom.php";

$url = "http://kazan.dorus.ru/category.php?id=78&type=sale&page=1";
$user_agent = "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:80.0) Gecko/20100101 Firefox/80.0";
$ref = "https://www.google.ru/";

$html = get_curl($url, $user_agent, $ref);
$file = "../../file.html";
file_put_contents($file, $html);

$a = acc_arr($html);

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

        <div class="title">
            <h1>Казань</h1>
        </div>
        <div class="output">
            <div class="number">
                <?php
                $i = 1;
                foreach ($a as $key => $value) {
                    echo '<div><p>' . $i . '.</p></div>';
                    $i++;
                }
                ?>
            </div>
            <div class="link">
                <?php
                foreach ($a as $key => $value) {
                    echo '<div>' . $key . '</div>';
                }
                ?>
            </div>
            <div class="price">
                <?php
                foreach ($a as $key => $value) {
                    echo '<div><p>' . $value . '</p></div>';
                }
                ?>
            </div>
        </div>

    </div>

</body>
</html>
