<?php
declare(strict_types=1);

use app\classes\Validate;

require '../vendor/autoload.php';

$validations = new Validate();
$validations->setValidations([
    'firstName'=>'required',
    'lastName'=>'required',
    'email'=>'required|email'
]);
var_dump($validations->validate());