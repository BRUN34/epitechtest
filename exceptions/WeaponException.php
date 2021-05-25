<?php

class WeaponException extends Exception
{


    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $space= ' ';
        $pos = strpos($message,$space);
        if ($pos === false){
            $message= $message.": I refuse to fight with my bare hands.\n";
        }else{
            list($nom, $arm, $rpgclass)= explode(" ",$message);
            if ($rpgclass == "warrior"){
                $message=$nom.": A ".$arm."?? What should I do with this ?!\n";
                $code=1;
            }
            if($rpgclass == "mage"){
                $message=$nom.": I don 't need this stupid ".$arm."! Don 't misjudge my powers !\n";
            }
        }
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return $this->message;
    }

}


