<?php

namespace app\classes;
class Login
{
    //public string $email;
    //public string $password;

    public function auth(Crud $crud): string|int //type hint
    {
        return $crud->read();
    }

}