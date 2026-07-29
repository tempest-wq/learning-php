<?php

//require '../app/classes/Login.php';
require '../helpers/autoload.php';
require '../vendor/autoload.php';
use app\classes\Login;

$login = new Login();
$crud = new \app\classes\Crud();

echo helper();
echo $crud->read();
//$login->email='example@example.com';
//$login->password='qualquercoisa';
//echo $login->auth();

//$user = ['name' => 'Rodrigo', 'email' => 'rodriguin@gmail.com'];

//$userObject = (object)$user;

//echo $userObject->name;