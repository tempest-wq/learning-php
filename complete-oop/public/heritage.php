<?php
declare(strict_types=1);
require '../vendor/autoload.php';

header('Content-type:application/json');

$book = new \app\classes\Book();
$book->name='Nome qualquer';
$book->description='Descrição qualquer';
$book->author='OMS';
$book->pages=300;

$abajur = new \app\classes\Abajur();
$abajur->name='Abajur';
$abajur->description='É um abajur';
$abajur->isOn=true;

echo $abajur->ligar();
//echo json_encode($book);
