<?php
declare(strict_types=1);

require '../vendor/autoload.php';

$user = new \app\classes\User('vitin', 'osmdinm@gmail.com');

echo $user->info();

//parent SOMENTE para metodos da classe pai
