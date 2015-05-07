<?php
    $row = $_REQUEST['r'];
    $col = $_REQUEST['c'];
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <script src="jquery-1.11.2.min.js"></script>
    <script src="js/sudoku.js"></script>
    <script src="js/puzzles.js"></script>

    <title>Super Sudoku</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
<form id="cellinput">
    <fieldset>
        <?php
            $html = "<p>Insert value into cell [".$row." , ".$col."]</p>";
            echo $html;
        ?>
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
</body>
</html>