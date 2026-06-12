<?php
// Filtro Sanitizers removem certos caracteres etc..

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

// Filtro de Validate que logicamente valida algo
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Email valido';
    } else{
        echo 'Email invalido';
    }

    //var_dump($name, $email);
}

