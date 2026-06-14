<?php
//Classes e Objetos

require '../vendor/autoload.php';

//Caracteristicas = Propriedades ou Atributos, Comportamentos = Metodos
class Person1 {
    public string $name;
    public int $age;
    public string $gender;

    public function walk():string {
        return $this->name." is walking"; //this sempre chamado dentro dos metodos
    }
    public function run():string {
        return "I am running";
    }
    public function data(){
        return [
            'name' =>$this->name,
            'age' => $this->age,
            'gender' => $this->gender
        ];
    }
}

$person = new Person1();

$person->name = 'Ruindade pura';
$person->age = 30;
$person->gender = 'Masculino';
$person->walk();