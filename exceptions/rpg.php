<?php
require 'Warrior.php';
require 'Mage.php';
require 'Movable.php';
require 'WeaponException.php';

class Character{

    private $_name;
    private $_RPGClass;
    private int $_life=50;
    private int $_agility=2;
    private int $_strength=2;
    private int $_wit=2;

     function __construct($name)
     {
         $space= ' ';
         $pos = strpos($name,$space);
         if ($pos === false){
             $this->_name= $name;
             $this->_RPGClass="Character";
         }else{
             list($nom, $char)= explode(" ",$name);
             $this->_name=$nom;
             $this->_RPGClass=$char;
         }
     }

     public function getName(): string
     {
         return $this->_name;
     }


    public function setRPGClass($value)
    {
        $this->_RPGClass = $value;
    }

    public function getRPGClass(): string
    {
        return $this->_RPGClass;
    }

    public function setLife($value)
    {
        $this->_life = $value;
    }

    public function getLife(): int
    {
         return $this->_life;
    }

    public function setAgility($value)
    {
        $this->_agility = $value;
    }

    public function getAgility():int
    {
        return $this->_agility;
    }

    public function setStrength($value)
    {
        $this->_strength = $value;
    }

    public function getStrength(): int
    {
        return $this->_strength;
    }

    public function setWit($value)
    {
        $this->_wit = $value;
    }

    public function getWit(): int
    {
         return $this->_wit;
    }

    public function unsheathe(){
         echo $this->getName().": unsheathes his weapon .\n";
    }

    public function __call($nom, $arg)
    {
        if ($this->getRPGClass() == "warrior"){ $arg = " like a bad boy\n";}
        else{$arg=" furtively.\n";}

        if ($nom == "moveRigth"){
            echo Movable::moveRigth2($this->getName()).$arg;
        }elseif ($nom == "moveLeft"){
            echo Movable::moveLeft2($this->getName()).$arg;
        }elseif ($nom == "moveBack"){
            echo Movable::moveBack2($this->getName()).$arg;
        }elseif ($nom == "moveForward"){
            echo Movable::moveForward2($this->getName()).$arg;
        }
    }

}

$warrior = new Warrior("Jean-Luc");
$mage = new Mage("Robert");

//$warrior->moveForward();
//$mage->moveForward();

$warrior->tryToAttack("screwdriver");
$mage->tryToAttack("hammer");
$warrior->tryToAttack("hammer");

try {
    $mage->attack("");
}catch (WeaponException $e){
    echo $e->getMessage();
}

