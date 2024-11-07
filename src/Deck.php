<?php

namespace Src;
use Src\Card;

class Deck {

    private $type;
    private $value;
    private array $cards;

    public function __construct()
    {
    $this->types = array("schoppen", "klaver", "harten", "ruiten");
    $this->values = range(1, 13) ; //array(2, 3, 4, 5, 6, 7, 8, 9, 10, "boer", "vrouw", "heer", "aas");
    $this->createDeck();
    }

    public function GetCards(){
        return $this->cards;
    }


    private function createDeck() 
    {

        
        foreach ($this->types as $type) {
            foreach ($this->values as $value)  { 
                $card = new Card($type,$value);
                $this->cards[] = $card;
            }   

        }
      


    }

}
