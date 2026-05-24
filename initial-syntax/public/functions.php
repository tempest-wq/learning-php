<?php
//Exemplo ficticio
function connection()
{
    //conexão ficticia em banco de dados
    $pdo = new PDO("mysql:host=localhost;dbname=books", "root", "");
    return $pdo;
}

function getData($table)
{
    $connection = connection();
    $query = $connection->query("select * from {$table}");// -> para acessar propriedade de
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData("users"));
