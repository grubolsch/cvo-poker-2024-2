<?php



namespace Src;

class Chips 
{


    // test
    private string $color;
    private int $value;
    private int $quantity ;
    private int $lostChips ;
    private int $wonChips ;


    public function __construct($color, $value, $quantity, $lostChips, $wonchips){
        $this->color = $color;
        $this->value = $value;
        $this->quantity = $quantity;
        $this->lostChips = $lostChips;
        $this->wonChips = $wonChips;



    }


    public function getColor(): string
    {
        return $this->color;
    }
    
    public function getvalue(): int
    {
        return $this->value;
    }
    
    public function getLostChips(): int
    {
        return $this->lostChips;
    }

   
    
    public function setLostChips(): int
    {
        $this->lostChips = $lostChips;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
    public function setQuantity(): int
    {
        return $this->quantity;
    }

   

    public function getwonChips(): int
    {
        return $this->wonChips;
    }

   
    
    public function setwonChips(): int
    {
        $this->wonChips = $wonChips;
    }

    public function setColor(): string
    {
        $this->color = $color;
    }
    
    public function setvalue(): int
    {
        $this->value = $value;
    }
   
    public function totalValue()
    {

        return $this->value * $this->quantity;
    }

    public function totalQuantity()
    {

        return $this->qauntity;
    }

    public function subtract(){
       return $quantity = $quantity - $lostChips;
    }

    public function addChips(){
        return $quantity = $quantity + $wonChips;
     }
    
    






    }

    $chips = [new chips ('blue',1,1), new chips ('red',2,1), new chips ('groen',5,1), new chips('white' ,10,1), new chips('black', 15,1)];





    
    



