<?php
declare(strict_types=1);
require '../vendor/autoload.php';

final class Checkout { //Não pode ser herdada
    final public function pay(){//impede sobre-escrita
        return [];
    }
}

class GatewayCheckout  extends Checkout{
    public function pay(){
        return [];
    }
}

$gateway = new GatewayCheckout();



;