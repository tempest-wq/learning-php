<?php
//Verificar se variável, array.. existe
$current = "Qualquer coisa";
$teste = null;

if (isset($teste)) {
    echo $teste;
} else {
    echo "Não existe moi de chifre";
}
echo "\n";

$arrayTest = ["city" => "itapaje", "state" => "ceara"];

echo isset($arrayTest["cidade"]);
