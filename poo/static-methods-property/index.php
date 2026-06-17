<?php
require "../vendor/autoload.php";
//Propriedades estáticas
//Propriedades e metodos estáticos so fazem parte do contexto da classe.
// Operador de resolução de escopo (::)

class Carro
{
    public static string $modelo;
    public static int $ano;
    public static string $marca;

    public static function data():string{
        self::$modelo = 'Civic';
        self::$ano = 1998;
        self::$marca = 'Honda';
        $data = self::$modelo.self::$ano.self::$marca;

        return 'Os dados do seu carro são: '. $data;
    }

}

$carro = new Carro();
$carro->modelo='Volvo'; //Acesso pela instancia da classe
$carro::$ano=1998; //Acesso através do objeto via operador de resolução de escopo
$carro->data();

Carro::data(); //Para chamar um metodo estático

//self = ele msm ou seja, a propria classe que implementa o metodo;
// parent = pega da classe pai, só pode ser usado em classes filhas;
// static = da classe que foi chamada
class A extends B
{
    protected static function method1()
    {
        return 'Method 1 from A';
    }
}
class B
{
    protected static function method1()
    {
        return 'Method 1 from B';
    }
    public static function execute()
    {
        return static::method1();
    }
}

B::execute(); //qnd utiliza static, sempre chama da classe chamada
A::execute(); // quando utiliza self, ele sempre chama da classe que implementa

class Container
{
    protected static array $bindings = [];

    public static function set(string $key, mixed $value)
    {
        static::$bindings[$key]=$value;
    }
    public static function resolve(string $key)
    {
        return static::$bindings[$key];
    }
}

Container::set("marca", "Chevrolet");
Container::set("Ano", 1923);

Container::resolve("marca");