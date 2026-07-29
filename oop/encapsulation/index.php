<?php

//Encapsulamento = Esconder o máximo possivel das caracteristicas das propriedades e dos metodos da classe
//Encapsular é mostrar somente o que o objeto precisa saber, e esconder o que não precisa
require '../vendor/autoload.php';

//Public, pode ser acessado por todos
//Private só pode ser acessado dentro da própria classe
//Protected visivel na própria classe e classes filhas
class Person1
{
    private string $name;
    private int $age;
    private string $gender;

    //public function __construct(public string $name, public int $age, public string $gender)
    //{
    //}

    public function walk(): string
    {
        return $this->name . " is walking"; //this sempre chamado dentro dos metodos
    }

    public function run(): string
    {
        return "I am running";
    }

    public function data()
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'gender' => $this->gender
        ];
    }
}

//$person = new Person1('Vitor', 34, 'Masculino');
$person = new Person1();
$person->name='Vitin';
$person->age=12;
$person->gender='Masculino';
