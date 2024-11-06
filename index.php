<?php

use Src\Game;
use Src\Deck;
use Src\Card;

require __DIR__ . '/vendor/autoload.php';

$game = new Game();
$game->start();

$deck = New Deck();


foreach($deck->getCards() as $card){
    echo $card->GetType();
    echo $card->GetValue();
    echo " ";
}

