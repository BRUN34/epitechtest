<?php


class Mage extends Character
{
    public function __construct($name)
    {

        parent::__construct($name);

        echo $this->getName().": May the gods be with me.\n";
        $this->setRPGClass("Mage");
        $this->setLife(70);
        $this->setStrength(3);
        $this->setAgility(10);
        $this->setWit(10);
    }

    public function attack($value)
    {
        if ($value == "magic" || $value == "wand"){
            $this->unsheathe();
            echo $this->getName().": Rrrrrrrrr....\n";
            echo $this->getName().": Feel the power of my ".$value."!\n";
        }else{
            return null;
        }
    }
}