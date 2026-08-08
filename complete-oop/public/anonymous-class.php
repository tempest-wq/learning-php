<?php
declare(strict_types=1);
require '../vendor/autoload.php';

//Classe anônima

$className = new class {
    public function calculo()
    {
        return 'fazendo alguma coisa';
    }
};

var_dump($className->calculo());

class Email
{
    public function send(ClientInterface $client)
    {
        return $client->send();
    }
}
interface ClientInterface
{
    public function send();
}
class Client
{
    public function send()
    {
        return 'send from client class';
    }
}
$email = new Email();
echo $email->send(new class() implements ClientInterface{
    public function send()
    {
        return 'sendo from anonymous class';
    }
});

$obj = new class('Qualquer merda')
{
    public function __construct(private string $name)
    {

    }
    public function getName()
    {
        return $this->name;
    }
};
var_dump($obj->getName());
// cria classe anonima para ser extendida e ser utilizada
//sempre criar classe anonima direto no arquivo que vai utiliza-la