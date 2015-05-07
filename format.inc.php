<?php
/**
 * Created by PhpStorm.
 * User: AbdullahAlkawai
 * Date: 2/25/15
 * Time: 8:31 PM
 */

function present_header() {
    $html  = <<< HTML
<a href="./index.php" id="newgame">New Game</a>
<a href="game.php" id="game">Game</a>
HTML;

    return $html;
}