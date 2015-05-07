<?php

require "../game.inc.php";

$_SESSION['name'] = "Guest's Sudoku";

if(!empty($_POST['name']) && isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name']."'s Sudoku";
}

header('Location: ../game.php');



