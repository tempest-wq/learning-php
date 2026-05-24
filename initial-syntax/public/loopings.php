<?php

$values = ["Ferdinando", "Jose", "Maria", "Gabriel"];

echo "----------------For------------------";
echo "\n";
// Loop For

for ($i = 0; $i < count($values); $i++) {
    echo $values[$i] . " ";
}
echo "\n";
echo "\n";

echo "----------------While------------------";
echo "\n";
// Loop While : testa a condição antes de executar o bloco, podendo nem sequer rodar.
$j = 0;
echo "Pré incremento: " . $j . "\n";
while ($j < count($values)) {
    echo $values[$j] . " ";
    $j++;
}
echo "\nPós incremento: " . $j;
echo "\n";
echo "\n";
//Independente do bloco da variável, ela incrementa de todo jeito
echo "----------------Do While------------------";
echo "\n";
// Do While - Faça Enquanto :   Testa a condição depois, garantindo que rode pelo menos uma vez
$k = 0;
do {
    echo $values[$k] . " ";
    $k++;
} while ($k < count($values));
echo "\n";
echo "\n";

echo "----------------Foreach------------------";
echo "\n";
//ForEach - Para cada : Itera sobre chave => valor, onde $key representa o indice e $value o valor do indice
foreach ($values as $key => $value) {
    // caso use $values as $value itera sem guardar os indices
    echo $key . "=>" . $value;
    echo "\n";
}

echo "\n";
echo "----------------Continue e Break------------------";
echo "\n";
for ($l = 0; $l < count($values); $l++) {
    if ($l == 1) {
        continue;
    }
    echo $values[$l];
}
echo "\n";

for ($m = 0; $m < count($values); $m++) {
    if ($m == 1) {
        break;
    }
    echo $values[$m];
}
