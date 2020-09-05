<?php

require_once "help_func.php";

$url = "https://applicant.21-school.ru/users/sign_in";
$html = get_curl($url);

file_put_contents('test.html', $html);

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
        <?php echo $html ?>
    </div>

</body>
</html>
