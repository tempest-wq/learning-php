<?php
declare(strict_types=1);

require '../vendor/autoload.php';

$person = new \app\classes\Person('Lerdoso', 'lambechupa@gmail.com');
echo $person->info();