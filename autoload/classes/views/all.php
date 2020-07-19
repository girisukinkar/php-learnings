<?php

namespace views;

class all
{
    const GREETINGS = 'Hello to everyone';
    public function get()
    {
        return "views/all.php";
    }

    public static function greetings(){
        return self::GREETINGS;
    }
}