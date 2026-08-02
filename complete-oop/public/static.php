<?php
declare(strict_types=1);
require '../vendor/autoload.php';

//static da prioridade a classe que está sendo chamado

class UserTest
{
    public static function info()
    {
        return __CLASS__;
    }
    public static function methods()
    {
        var_dump('self: ' .self::info()); //classe do método que o implementa
        var_dump('static: ' .static::info()); //Classe invocada
        //var_dump('parent: ' .parent::info()); //Referencia a classe pai
    }
}
class UserTest1 extends UserTest
{
    public static function info()
    {
        return __CLASS__;
    }
}
//Static só funciona na própria classe ou se estiver herdando
echo (new UserTest)->methods();