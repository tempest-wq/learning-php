<?php
// Arrays
$data = ["Penis", 34, 34.6, true, "azul", false];

$data[6] = "teste";

$length = count($data);
$data[$length] = "last";

$length = count($data);
$data[$length] = "peste";

array_push($data, "qualquer"); // ao final do array
array_unshift($data, 1); // no começo do array

var_dump($data);
var_dump($data[3]);
//print_r($data);
echo "-------------------\n";

$indices = [
    "comida" => "maçã",
    "cor" => "vermelho",
    "validade" => 30,
    "lista" => ["higiene" => "papel higienico", "açougue" => "carne"],
];

var_dump($indices["lista"]["higiene"]);
