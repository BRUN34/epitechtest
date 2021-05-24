<?php

class Movable extends Character
{
    public static function moveRigth2($value): string
    {
        return $value.": moves right";
    }

    public static function moveLeft2($value): string
    {
        return $value.": moves left";
    }

    public static function moveBack2($value): string
    {
        return $value.": moves back";
    }

    public static function moveForward2($value): string
    {
        return $value.": moves forward";
    }

}