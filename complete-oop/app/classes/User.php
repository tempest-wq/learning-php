<?php

namespace app\classes;

class User extends Person
{
    public function info()
    {
        return parent::info(); //Pra poder fazer referência ao mesmo metodo
    }
}