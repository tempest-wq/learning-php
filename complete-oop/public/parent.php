<?php
declare(strict_types=1);
require '../vendor/autoload.php';

//parent SEMPRE será utilizado na classe filha para se referenciar a classe pai
//parent so funciona para propriedades estáticas, métodos podem ser estático ou n
class Person
{
    public function __construct()
    {
        var_dump('Classe pai');
    }
    public static function info()
    {
        return 'person info classe pai';
    }
    public function data()
    {
        return 'Dados da classe pai';
    }
}
class User extends Person
{
    public function __construct()
    {
        parent::__construct();
    }
    public function parentTest()
    {
        return parent::info();
    }
    public function data()
    {
        return parent::data();
    }
}

echo (new User)->data();