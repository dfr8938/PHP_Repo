<?php

    session_start();
    $answer2 = $_POST['answer2'];
    $_SESSION['answer2'] = $answer2;

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
    <p>Вопрос №3:</p>
    <p>2 / 2 = ?</p>
</div>
<div>
    <form action="test_4.php" method="post">
        <input type="text" name="answer3">
        <input type="submit" name="submit">
        <hr>
        <a href="test_2.php">Вопрос №2</a>
    </form>
</div>

</body>
</html>
