<?php


class Warrior extends Character
{

    public function __construct($name)
    {
        parent::__construct($name);

        echo $this->getName().": My name will go down in history!\n";
        $this->setRPGClass("warrior");
        $this->setLife(100);
        $this->setStrength(10);
        $this->setAgility(8);
        $this->setWit(3);
    }
    public function attack($value)
    {
        if ($value == "hammer" || $value == "sword"){
            $this->unsheathe();
            echo $this->getName().": Rrrrrrrrr....\n";
            echo $this->getName().": I'll crush you with my ".$value."!\n";
        }else{
            return null;
        }
    }

    /**
     * @throws Exception
     */
    public function tryToAttack($arm)
    {
        $rpgclass=$this->getRPGClass();

        try {
            WeaponException::exception($arm,$rpgclass);
        }catch(Exception $e){
            $this->attack($arm);
        }
    }

}
