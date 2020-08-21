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

    <div class="list">
        <ol>
        <?php

            # create list
            $fruits = ["apple", "orange", "cherry", "lime", "strawberry"];
            
            # output elements list
            for ($i = 0; $i < count($fruits); $i++) {
                echo "<li>" . $fruits[$i] . "</li>";
            }

        ?>
        </ol>
    </div>
</body>
</html>