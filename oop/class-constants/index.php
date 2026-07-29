<?php
define ('CHAVE', 'Valor'); //constante normal
const NAME = 'valor constante'; // constante de classes, visibilidade por padrão é public

abstract class User
{
    private const RANDOM = 'file'; //utilizar em contexto de classe
    protected function view(string $view)
    {

    }
}
class UserWork extends User
{

}

