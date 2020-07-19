<?php
namespace models;

use views\all;


class home extends all
{
    public function get()
    {
        return parent::greetings();
    }
}