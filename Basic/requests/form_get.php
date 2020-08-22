<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Form(GET)</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="wrap">
    <div class="container">

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-4">
                <form method="get" action="form_get.php">
                    <div class="form-group">
                        <label for="exampleInputText1">Number A:</label>
                        <input type="text" name="a" class="form-control form-control-sm" id="exampleInputText1" aria-describedby="numberA">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputText2">Number B:</label>
                        <input type="text" name="b" class="form-control form-control-sm" id="exampleInputText2" aria-describedby="numberB">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputText3">Number C:</label>
                        <input type="text" name="c" class="form-control form-control-sm" id="exampleInputText3" aria-describedby="numberC">
                    </div>

                        <input type="submit" name="submit" value="Enter" class="btn btn-primary btn-block btn-sm">
                        <input type="reset" value="Clear" class="btn btn-warning btn-block btn-sm">

                </form>
            </div>
            <div class="col-xl-4" id="output">
                <?php

                // echo '<pre>';
                // print_r($_GET);
                // echo '</pre>';

                if (isset($_GET["submit"])) {
                    $a = $_GET["a"];
                    $b = $_GET["b"];
                    $c = $_GET["c"];

                    if (!empty($a) && !empty($b) && !empty($c)) {

                        $a = (int)$a;
                        $b = (int)$b;
                        $c = (int)$c;

                        $sum = $a + $b + $c;
                        echo "<p><span>a</span> = $a; <span>b</span> = $b; <span>c</span> = $c.</p>";
                        echo "<p><span>Сумма чисел:</span> $sum</p>";
                    }
                }
                ?>
            </div>
            <div class="col-xl-2"></div>
        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>