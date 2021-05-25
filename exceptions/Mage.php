<?php


class Mage extends Character
{
    public function __construct($name)
    {

        parent::__construct($name);

        echo $this->getName().": May the gods be with me.\n";
        $this->setRPGClass("mage");
        $this->setLife(70);
        $this->setStrength(3);
        $this->setAgility(10);
        $this->setWit(10);
    }

    /**
     * @throws WeaponException
     */
    public function attack($value)
    {
        $role = true;

            try {
                if (empty($value)) {
                    $role = false;
                    throw new WeaponException($this->getName());
                }
                if ($value != "magic" && $value != "wand") {
                    $role = false;
                    throw new WeaponException($this->getName() . " " . $value . " " . $this->getRPGClass());
                }
            } catch (WeaponException $e) {
                throw $e;
            }
        if ($role === true) {
            $this->unsheathe();
            echo $this->getName() . ": Rrrrrrrrr....\n";
            echo $this->getName() . ": Feel the power of my " . $value . "!\n";
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