<?php
// Conversão de dados
// (string), (boolean), (float), (integer), (double), (object), (array),
// intVal, floatVal, strVal, boolVal

$name = "Nome qualquer";
$arrayTest = [
    "nome" => ["Vitor", "Francisco"],
    "idade" => [34, 35],
    "numero" => 10,
];

$change = (object) $arrayTest;

var_dump($name);

var_dump($change);
var_dump($change->nome[0]);

// Outro forma
$value = 399;

$resource = boolval($value);

var_dump($resource);
