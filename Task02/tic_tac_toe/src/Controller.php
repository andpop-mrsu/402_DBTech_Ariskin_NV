<?php
namespace ariskinnv\tic_tac_toe\Controller;
use function ariskinnv\tic_tac_toe\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>