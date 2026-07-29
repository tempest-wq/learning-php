<?php

namespace app\classes;

class Person
{
    public string $name;
    public string $email;
// Metodo construtor usado para atribuir valor as propriedades (maioria das vezes)
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function info()
    {
        return "Meu nome é {$this->name} e meu email é {$this->email}";
    }

}