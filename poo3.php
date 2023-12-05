<?php

class Countries{

    public $france = "France";
    public $Argentine = "Argentine";
    public $bresil = "Brésil";
}


class Players extends Countries{

    public $player1 = "Messi";
    public $player2 = "Mbappé";
    public $player3 = "Neymar";

    public function displayPlayerWithCountry(){
        return $this->player2. " plays for ".$this->france;
    }
}

$p = new Players();
echo $p->displayPlayerWithCountry();