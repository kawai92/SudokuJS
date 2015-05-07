<?php
/**
 * Created by PhpStorm.
 * User: AbdullahAlkawai
 * Date: 2/25/15
 * Time: 8:31 PM
 */

function present_header() {
    $html  = <<< HTML
<a href="#" id="newgame">New Game</a>
<a href="#" id="game">Game</a>
HTML;

    return $html;
}