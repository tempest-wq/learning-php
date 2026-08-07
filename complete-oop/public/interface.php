<?php
declare(strict_types=1);
require '../vendor/autoload.php';

interface CartInterface
{
    public function add($product): void;
    public function remove($product): void;
    public function quantity($product, $quantity): void;
    public function clear(): void;
    public function cart(): array;
}
class Cart implements CartInterface
{
    public function add($product): void{

    }
    public function remove($product): void{

    }
    public function quantity($product, $quantity): void{

    }
    public function clear(): void{

    }
    public function cart(): array{
        return [];
    }
}