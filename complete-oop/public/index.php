<?php
declare(strict_types=1);
//header('Content-type:applications/json');

require '../vendor/autoload.php';

$user = new \app\models\User();
echo $user->listing();

echo "<br/>";

$product = new \app\models\Product();
echo $product->update();
