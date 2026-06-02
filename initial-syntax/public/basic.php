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

// &&(AND), ||(OR), !(NEGAÇÃO)
$isAcessible = true;
$isVerify = false;

$result = $isAcessible && $isVerify;

echo "\n";
var_dump($result);
echo "Negação: ";
var_dump(!$result);

echo "-----------------Valores Truthy e Falsy-----------------";
echo "\n";
//Falsy:
// null     null
// 0    integer
// 0.0      float
// "0"      string
// ""       empty string
// arrray()     empty array

// Truthy - todo o resto

var_dump(!![]);

echo "\n";

if (!!"Vitor") {
    echo "teste";
}
echo "-----------------Estruturas Condicionais-----------------";
echo "\n";

$isAdmin = true;
if ($isAdmin) {
    echo "isAdmin";
} else {
    echo "Sai pra lá";
}
echo "\n";
// Condicional com return
$number1 = 10;
$number2 = 20;
$canAcess = true;

$resultado = $number2 > $number1 && "true" == $canAcess;

//if ($resultado) {
//echo "é verdadeiro";
//return;
//}
//echo " não é verdadeiro";

// Condicional com operador ternário
echo "\n";
echo $resultado ? "é verdadeiro" : "não é verdadeiro";

// Condicional com Switch
echo "\n";

$nome = "Vitin pintinho";
switch ($nome) {
    case "Ronaldo":
        echo "É ronaldo";
        break;
    case "Robinho":
        echo "É robinho";
        break;
    case "Vitin pintinho":
        echo "É vitin pintinho";
        break;
    default:
        echo "Não é nenhum desses";
        break;
}

echo "\n";
echo "-----------------Booleans Puros, Strings, Numbers-----------------";
echo "\n";

$namePure = "Vitor"; // Não é puro
var_dump($namePure);
$namePure = !!"Vitor"; // Transforma em puro
var_dump($namePure);

$nameTest = "Vitor";
$age = 24;
$logged = false;

if ($nameTest && $age >= 18 && !$logged) {
    echo "é verdadeiro";
} else {
    echo "é falso";
}

echo "\n";
// Strings
$typeString = "Algum Al valor";
echo gettype($typeString) . "\n";
echo "Testando algum valor {$typeString}" . "\n";

echo substr($typeString, 0, 5) . "\n";
echo str_contains($typeString, "Al"); //return se existe ou não

echo "\n";
// Numbers
// 30 integer
// 34.5393 double
$numero1 = 40;
$numero2 = "390a";

if (is_numeric($numero1) && is_numeric($numero2)) {
    echo "É numerico";
} else {
    echo "Não é numerico";
}
echo "\n";
echo ceil(434.58) . "\n";
echo floor(434.58);
