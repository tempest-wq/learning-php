<?php

namespace app\classes;

class Abajur extends Product
{
    public bool $isOn = false;

    public function ligar()
    {
        return "O produto {$this->name} está ligado";
    }

}