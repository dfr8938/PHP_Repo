<?php

    session_start();

    $answer1 = $_SESSION['answer1'];
    if ($answer1 != 4) $res1 = "<span class='minus'><i class='fa fa-minus' aria-hidden='true'></i></span>";
    else $res1 = "<span class='plus'><i class='fa fa-plus' aria-hidden='true'></i></span>";
    $answer2 = $_SESSION['answer2'];
    if ($answer2 != 4) $res2 = "<span class='minus'><i class='fa fa-minus' aria-hidden='true'></i></span>";
    else $res2 = "<span class='plus'><i class='fa fa-plus' aria-hidden='true'></i></span>";
    $answer3 = $_SESSION['answer3'];
    if ($answer3 != 1) $res3 = "<span class='minus'><i class='fa fa-minus' aria-hidden='true'></i></span>";
    else $res3 = "<span class='plus'><i class='fa fa-plus' aria-hidden='true'></i></span>";
    $answer4 = $_POST['answer4'];
    if ($answer4 != 0) $res4 = "<span class='minus'><i class='fa fa-minus' aria-hidden='true'></i></span>";
    else $res4 = "<span class='plus'><i class='fa fa-plus' aria-hidden='true'></i></span>";

    if ($answer1 == 4 && $answer2 == 4 && $answer3 == 1 && $answer4 == 0) {
        $result = "Ура! Все ответы верны!";
    }
    else {
        $result = "Вы где-то допустили ошибку! Проверьте свои ответы...";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div>
        <p>Ваш результат:</p>
        <?php

            echo "<p>Ответ №1: $answer1 <span>$res1</span></p>";
            echo "<p>Ответ №2: $answer2 <span>$res2</span></p>";
            echo "<p>Ответ №3: $answer3 <span>$res3</span></p>";
            echo "<p>Ответ №4: $answer4 <span>$res4</span></p>";
            echo "<p>$result</p>";
        ?>
        <a href="test_1.php">Пройти еще раз...</a>
    </div>
</body>
</html>
