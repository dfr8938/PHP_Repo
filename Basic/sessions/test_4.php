<?php

    session_start();
    $answer3 = $_POST['answer3'];
    $_SESSION['answer3'] = $answer3;

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
    <p>Вопрос №4:</p>
    <p>2 % 2 = ?</p>
</div>
<div>
    <form action="result.php" method="post">
        <input type="text" name="answer4">
        <input type="submit" name="submit">
        <hr>
        <a href="test_3.php">Вопрос №3</a>
    </form>
</div>

</body>
</html>
