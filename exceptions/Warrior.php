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

    /**
     * @throws WeaponException
     */
    public function attack($value)
    {
        $role=true;
        try {
            if (empty($value)){
                $role=false;
                throw new WeaponException($this->getName());
            }
            if ($value != "hammer" && $value != "sword") {
                $role=false;
                throw new WeaponException($this->getName()." ".$value." ".$this->getRPGClass());
            }
        }catch (WeaponException $e)
        {
            throw $e;
        }
        if ($role===true){
            $this->unsheathe();
            echo $this->getName().": Rrrrrrrrr....\n";
            echo $this->getName().": I'll crush you with my ".$value."!\n";
        }

    }

    public function tryToAttack($value)
    {
        try {
            $this->attack($value);
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
}

