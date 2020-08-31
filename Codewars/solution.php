<?php

require_once "config/function.php";

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

</head>
<body>

<div class="wrap">

    <div class="container">
        <div class="row">

            <div class="box">
                <div class="content" style="display: flex; justify-content: center; align-items: flex-start">
                    <div class="col-xl-1" id="numb">
                        <?php
                            output_number_unit(1, 10);
                        ?>
                    </div>
                    <!-- 1 -->
                    <div class="col-xl-1" id="letter">
                        <?php
                            // единицы
                            output_rom_number('I', 'V', 'X');
                        ?>
                    </div>

                    <div class="col-xl-1" id="numb">
                        <?php
                            output_number(10, 100, 10);
                        ?>
                    </div>
                    <!-- 10 -->
                    <div class="col-xl-1" id="letter">
                        <?php
                            // десятки
                            output_rom_number('X', 'L', 'C');
                        ?>
                    </div>

                    <div class="col-xl-1" id="numb">
                        <?php
                            output_number(100, 1000, 100);
                        ?>
                    </div>
                    <!-- 100 -->
                    <div class="col-xl-1" id="letter">
                        <?php
                            //  сотни
                            output_rom_number('C', 'D', 'M');
                        ?>
                    </div>

                    <div class="col-xl-1" id="numb">
                        <?php
                            output_number(1000, 10000, 1000);
                        ?>
                    </div>
                    <!-- 1000 -->
                    <div class="col-xl-1" id="letter">
                        <?php
                            //  тысячи
                            output_rom_number('M', 'V', 'X');
                        ?>
                    </div>
                </div>

                <div class="output">
                    <div class="div">
                        <div class="input_text">
                            <div class="input_text_win">
                                <form action="solution.php" method="get">
                                    <label>Input date:<br>
                                        <input type="text" name="date" id="date"><br>
                                        <input type="submit" name="submit" id="submit">
                                        <input type="reset" name="reset" id="reset">
                                    </label>
                                </form>
                            </div>
                        </div>
                        <div class="output_text">
                            <div class="output_text_win">
                                <p style="font-weight: bold">DATE:</p>
                                <p>
                                    <?php
                                        if (!isset($_GET['submit']) && !isset($_GET['date'])) {
                                            echo 0;
                                        }
                                        else {
                                            echo (int) $_GET['date'];
                                        }
                                    ?>
                                </p>
                                <p style="font-weight: bold">ROM DATE: </p>
                                <p><?php
                                    if (!isset($_GET['submit']) && !isset($_GET['date'])) {
                                        echo 0;
                                    }
                                    elseif ($_GET['date'] == 0) {
                                        echo 0;
                                    }
                                    else {
                                        roman_date($_GET['date']);
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>

<?php

