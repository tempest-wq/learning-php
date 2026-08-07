<?php
declare(strict_types=1);
require '../vendor/autoload.php';
// polimorfismo é sobrescrita

abstract class Checkout
{
    abstract public function pay($payment): array;
}
class PaypalCheckout extends Checkout
{
    public function pay($payment): array//sobrescrita é em contexto de classe
    {
        return [];
    }
}
class PagseguroCheckout extends Checkout
{
    public function pay($payment): array//sobrescrita é em contexto de classe
    {
        return [];
    }
}
$paypalCheckout = new PaypalCheckout();
$paypalCheckout->pay();//Polimorfismo

$pagseguroCheckout = new PagseguroCheckout();
$pagseguroCheckout->pay();//Polimorfismo

//Só é polimorfismo se tiver uma interface/abstract em comum (herdando)