<?php
/**
 * Created by PhpStorm.
 * User: AbdullahAlkawai
 * Date: 2/26/15
 * Time: 12:40 AM
 */

require 'game.inc.php';

$controller = new SudokuController($sudokuGame, $_REQUEST);
$model = new SudokuModel($_POST['name']);

var_dump($controller);
var_dump($model);
var_dump($_POST);

//$_SESSION['name'] = $controller;
$_SESSION['name'] = $model;


if($_REQUEST['name'] == null) {
    unset($_SESSION['name']);
    header('Location: ./index.php');
    exit;
}

if($controller->isReset())
{
    unset($_SESSION[SUDOKU_SESSION]);
}

header('Location: ' . $controller->getPage());