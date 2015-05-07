<?php
/*
 * Created by PhpStorm.
 * User: AbdullahAlkawai
 * Date: 2/25/15
 * Time: 7:49 PM
 */
require 'game.inc.php';
require 'format.inc.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <script src="jquery-1.11.2.min.js"></script>
    <script src="js/sudoku.js"></script>
    <script src="js/puzzles.js"></script>

    <script>
        var sudoku;
        $(window).ready(function() {
            sudoku = new Sudoku(Math.floor((Math.random() * 11)));
        });
    </script>

    <title>Super Sudoku</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <?php
            echo present_header();
        ?>
    </nav>

    <img src="img/super2-600.png" alt="Sudoku Banner" width="730" height="225">

</header>


<div class="general">
        <fieldset>
            <?php
                echo $name;
            ?>

            <br>
            <br>

            <div id="puzzle"></div>
            <div id="answer"></div>

            <br>
            <br>

            <form id="cellinput">
                <fieldset>
            <p><label for="select">Select a value:</label><br>
                <select name="val" id="val">
                    <?php
                    for($j=0; $j <= 9; $j++) {
                        if($j == 0){
                            echo "<option value=\"$j\">value</option>";
                        }
                        else {
                            echo "<option value=\"$j\">$j</option>";
                        }
                    }
                    ?>
                </select>

            <p><input type ="radio" name="select" value="cellv" selected="">Add value<br>
                <input type ="radio" name="select" value="cluev">Add clue<br>
                <p><input type="submit" value="Enter"></p></p>
                </fieldset>
            </form>

            <p><b><a href="">Give up!</a></b></p>
            <br>
        </fieldset>
</div>
</body>
</html>