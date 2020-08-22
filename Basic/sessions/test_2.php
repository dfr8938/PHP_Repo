<?php

    session_start();
    $answer1 = $_POST['answer1'];
    $_SESSION['answer1'] = $answer1;

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

<div>
    <p>Вопрос №2:</p>
    <p>2 * 2 = ?</p>
</div>
<div>
    <form action="test_3.php" method="post">
        <input type="text" name="answer2">
        <input type="submit" name="submit">
        <hr>
        <a href="test_1.php">Вопрос №1</a>
    </form>
</div>

</body>
</html>
