<?php

//Callbacks são funções passadas como parâmetro para outras funções
// Funções são chamadas entre aspas em callbacks
function random($name)
{
    return "Olá " . $name;
}

function isCallback($callback)
{
    if (is_callable($callback)) {
        //Verificar se é callback com is_callable
        return $callback("Vitin"); //so o ato de abrir e fechar parenteses indica que está executando a função
    } else {
        return "Não é callback";
    }
}
$user = "random"; //Se eu passar como valor o mesmo nome da função de callback, o PHP executa achando que é uma função

echo isCallback("random");
echo "\n";

// call_user_func você usa quando quer passar como callback, uma função e o parametro dela.
function teste($nome)
{
    return "Qualquer coisa" . $nome;
}
echo call_user_func("teste", " Cuzudo\n");

class User
{
    //Metodos estáticos não precisa instanciar, só chama diramente entre aspas:
    // call_user_func(['User', "testCallbackClass"], "tempest", 24);
    public function testCallbackClass($username, $age)
    {
        return "Tome ai " . $username . " a idade é " . $age;
    }
}

$usuario = new User(); //Instancia a classe
//Quando você ta trabalhando com objetos e quer usar o call_user_func e trabalhar com o metodo do objeto, você chama o array pra passar a instancia e o metodo como primeiro parametro do call user func, e se nesse metodo tiver esperando um parametro, você passa como segundo parametro do call user func.
echo call_user_func([$usuario, "testCallbackClass"], "tempest", 24); //Como primeiro parametro vc passa o array, onde o primeiro valor é o objeto instanciado e o segundo é o metodo que quero executar
//E como segundo parametro o que eu quero passar de parametro para o metodo do callback.
echo "\n";

function exibirMensagem($elemento)
{
    return "Salve salve " . $elemento;
}

function prepararMensagem($callback)
{
    return call_user_func($callback, "Toin da pexera");
}

echo prepararMensagem("exibirMensagem");
echo "\n";

class Person
{
    public function __invoke()
    {
        //pode ser passado como callback, metodo magico para trabalhar com callback
        return "Mago dos 6 caminhos";
    }
}

$person = new Person();

echo $person();
echo "\n";

function pessoa($callback)
{
    return $callback();
}

echo pessoa($person);
