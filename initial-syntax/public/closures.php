<?php

$person = function ($name) {
    // função anonima, onde a variavel é um objeto do tipo closure
    return $name;
}; // função anonima precisa de ponto e virtula no final

//pode trabalhar com a variável como se fosse uma função
var_dump($person("Vitin"));

function closureTest($nome)
{
    $current = function () use ($nome) {
        //fala pra função principal que é pra usar esse parametro da closure
        return $nome;
    };

    return $current;
}

var_dump(closureTest("Vitin Pixain")()); //primeira aberta é da função e a segunda abertura é da closure
