<?php

//Classes e Objetos

require '../vendor/autoload.php';

//Caracteristicas = Propriedades ou Atributos, Comportamentos = Metodos
class Person1
{
    //public string $name;
    //public int $age;
    //public string $gender;

    public function __construct(public string $name, public int $age, public string $gender){ //metodo mágico para resgatar parametros do objeto Constructor Promotio
    //Metodo mágico construct é executado quando instancia a classe e é possivel passar valores na instancia
    }
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

$person = new Person1('Vitor', 34, 'Masculino');

//Instanciar classe = Transformar a classe em objeto