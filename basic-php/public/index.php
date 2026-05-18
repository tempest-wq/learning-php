<?php

echo "--------Constante, Pré e Pós Incremento---------" . "\n";

define("AGE", 15); //constantes em PHP é assim

echo AGE . "\n";

$name = "Vitor"; //  declaração de variavel

$name .= /* += -= *= /= .= atribuições */ " André";

echo $name . "\n";

$number = 10;

echo ++$number . "\n"; // pré incremento
--$number; // pré decremento

echo $number . "\n";

$number++; // pós incremento
$number--; // pós decremento
echo $number . "\n";

echo "---------------Operadores de Comparação--------------";
// Sempre retorna boolean
// < , > , >= , <= , != , !== , == ou ===
// != verifica se o valor é diferente
// !== verifica se o valor OU o tipo é diferente
// = atribuição
// == verifica se o valor é igual
// === verifica se o valor é igual E o tipo é igual
$comparison = "50" != 50;

echo "\n";

var_dump($comparison);
echo "\n";

echo "-----------------Operadores de Lógico-----------------";

// &&(AND), ||(OR), !
