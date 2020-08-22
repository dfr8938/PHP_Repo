<?php
    if (isset($_POST['submit']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
        setcookie('name', $name, time() + 3600);
    }
    elseif (isset($_COOKIE['name'])) {
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
    <title>Page | Index</title>
</head>
<body>

    <div>
        <h1>Index page</h1>
        <p>Hello, <?php echo $name; ?></p>
        <hr>
        <a href="cookie.php">Cookie page</a>
        <hr>
        <form action="" method="post">
            <label>
                <input type="text" name="name" placeholder="enter your name">
            </label>
            <input type="submit" name="submit" value="Enter">
            <input type="reset" name="clear" value="Clear">
        </form>


    </div>

</body>
</html>
