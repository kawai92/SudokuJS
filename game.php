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

            <div id="puzzle">
                <form id="gameform" action="" method="POST">
                    <fieldset>
                        <br>
                        <?php
                        /*
                         * The first row
                         */
                        $html = "<table>";

                        for($r=0; $r<9; $r++) {
                            /*
                            * The rest of the rows
                            */

                            for($c=0; $c<9; $c++) {
                                $html .=  "<td class='nothing'><button onclick=" . "sudoku.cellClicked(this)" . " key=" . "null" . " name=" . "cell" . " id=" . $r . "_".$c . " alt=\"not set\">&nbsp</button></td>";

                            }
                            $html .=  "</tr>";
                        }

                        $html .= "</table>";
                        echo $html;
                        ?>
                    </fieldset>
                </form>
            </div>
            <div id="answer"></div>

            <br>
            <br>



            <input type="button" id="giveUp" value="GiveUp" name="g" onclick="sudoku.giveUp()">
            <br>
        </fieldset>
</div>
<form id="cellinput">
    <fieldset>
        <p id="inputLoc"></p>
        <p><label for="select">Select a value:</label><br>
            <select name="val" id="val">
                <?php
                for($j=1; $j < 9; $j++) {
                    echo "<option value=\"$j\">$j</option>";
                }
                ?>
            </select>
        <p><input type="button" onclick="sudoku.enterValue()" value="InsertValue"></p>
        <p><input type="button" onclick="sudoku.enterClue()" value="InsertClue"></p>
        <p><input type="button" onclick="sudoku.cancelPop()" value="Cancel"></p>
    </fieldset>
</form>

</body>
</html>