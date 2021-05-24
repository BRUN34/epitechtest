<?php

class WeaponException extends Character
{
    /**
     * @throws Exception
     */
    public static function exception($arm, $rpgclass){
        if($arm == ""){
            throw new Exception(': I refuse to fight with my bare hands .');
        }
        elseif ($rpgclass == "warrior" && ($arm != "hammer" || $arm != "sword")){
            throw new Exception(": A ".$arm."?? What should I do with this ?!");
        }
        elseif ($rpgclass == "mage" && ($arm != "magic" || $arm != "wand")){
            throw new Exception(": I don 't need this stupid ".$arm."! Don 't misjudge my powers !");
        }
    }
}