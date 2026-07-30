<?php
declare(strict_types=1);
require '../vendor/autoload.php';

class StaticUser
{
    public static string $name;

    public static function userInfo()
    {
        return 'Método estático';
    }
    public static function info()
    {
        return __CLASS__;
    }
    public function selfUser()
    {
        return self::userInfo();
    }
}
class StaticUser1
{
    public static function info()
    {
        return __CLASS__;
    }
}
//self é referenciado a classe que o invoca
//parent é referenciado a classe pai
//Usar método estático quando for algo muito simples dentro do método,
//que não precise instanciar, caso queira usar a classe diretamente por exemplo

//$user = 'User';
//echo $user::userInfo();

//$user = StaticUser::userInfo(); //variações


StaticUser::$name='Tromboso';
echo StaticUser::$name;
echo StaticUser::userInfo();

