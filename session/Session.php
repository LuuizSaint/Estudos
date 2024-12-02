<?php

class Session
{

    public static function set(string $index, mixed $value)
    {
        $_SESSION[$index] = $value;
    }

    public static function has(string $index)
    {
        return isset($_SESSION[$index]);
    }

    public static function get(string $index)
    {
        if (self::has($index)) {
            return $_SESSION[$index];
        }

        return false;
    }

    public static function unset(string $index)
    {
        if (self::has($index)) {
            unset($_SESSION[$index]);
        }

        return false;
    }

    public static function destroy()
    {
        session_destroy();
        $_SESSION = [];
    }
}
