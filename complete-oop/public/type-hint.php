<?php
require '../vendor/autoload.php';

$login = new \app\classes\Login();
$login->auth(new \app\classes\Crud());