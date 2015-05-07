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
                                $html .=  "<td class='nothing'><button onclick=" . "cellClicked(this)" . " key=" . "null" . " name=" . "cell" . " value=" . $r . "," . $c . " alt=\"not set\">&nbsp</button></td>";

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



            <p><b><a href="">Give up!</a></b></p>
            <br>
        </fieldset>
</div>


</body>
</html>