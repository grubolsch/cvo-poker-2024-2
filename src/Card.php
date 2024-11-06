<?php

namespace Src;


class Card {

    private string $type;
    private int $value;

    public function __construct(string $type,int $value){
        $this->type = $type;
        $this->value = $value;
    }



    public function GetType(){
        return $this->type;
    }

    public function GetValue(){
        return $this->value;
    }
    
}
