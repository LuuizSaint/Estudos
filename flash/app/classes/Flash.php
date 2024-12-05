<?php

namespace app\classes;

class Flash
{
    public static function set(string $index, string $value)
    {
        if(!isset($_SESSION[$index])){
            $_SESSION[$index] = $value;
        }
    }

    public static function get(string $index)
    {
        if(isset($_SESSION[$index])){
            $flash = $_SESSION[$index];

            unset($_SESSION[$index]);

            return $flash;
        }
    }
}