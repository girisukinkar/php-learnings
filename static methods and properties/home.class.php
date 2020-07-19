<?php

namespace staticClass;

class home
{
    const GREETINGS = "Welcome to our House";
    public static function greeting()
    {
        return self::GREETINGS;
    }
}


class address extends home
{

    public static function getAddress()
    {
        echo parent::greeting() . " We live near Wood mall Thane";
    }
}