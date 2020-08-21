<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <div class="hello">
        <p>Hello!!!</p>
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<h" . $i . ">Hello!!!</h" . $i . ">";
            }

            for ($i = 5; $i >= 1; $i--) {
                echo "<h" . $i . ">Hello!!!</h" . $i . ">";
            }
        ?>
    </div>

</body>
</html>