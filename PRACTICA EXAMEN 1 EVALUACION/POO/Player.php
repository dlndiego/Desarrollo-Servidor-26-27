<?php

class Player
{
    private $name = "";
    private $birthday = "";
    private $country = "";
    private $dorsal = "";
    private $position = "";
    private $goals = 0;
    private $matches = 0;
    private $minutes = 0;
    private $yellowCard = 0;
    private $redCard = 0;

    public function __construct($name, $birthday, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function age()
    {
        $esteAño = 2026;
        $añoJugador = explode("/", $this->birthday);
        $año = (int) $añoJugador[2];
        return $esteAño - $año;
    }

    public function getGoals(){
        return $this->goals;
    }

    public function addCard($color){
        if($color == "rojo"){
            $this->redCard++;
        }else if($color == "amarillo"){
            $this->yellowCard++;
        }
    }

    public function playMinutes(int $min){
        $this->minutes+=$min;
    }

    public function __toString() {
    return "<td>" . $this->name . "</td>"
         . "<td>" . $this->birthday . "</td>"
         . "<td>" . $this->country . "</td>"
         . "<td>" . $this->dorsal . "</td>"
         . "<td>" . $this->position . "</td>"
         . "<td>" . $this->goals . "</td>"
         . "<td>" . $this->matches . "</td>"
         . "<td>" . $this->minutes . "</td>"
         . "<td>" . $this->yellowCard . "</td>"
         . "<td>" . $this->redCard . "</td>";
}
}