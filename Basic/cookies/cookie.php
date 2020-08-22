<?php
    if (isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    }
    else {
        $name = "Гость";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page | Cookie</title>
</head>
<body>
    <div>
        <h1>Cookie page</h1>
        <p>Hello, <?php echo $name; ?></p>
        <hr>
        <a href="index.php">Index page</a>
        <hr>

    </div>
</body>
</html>
