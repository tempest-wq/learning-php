<?php
declare(strict_types=1);
require '../vendor/autoload.php';
//encapsulamento é ligado aos modificadores de acesso: public, private, protected
//métodos de acesso (get / set)

/**
 * Classe de Produtos
 * Classe que implementa os preços e descontos (se aplicável) para produtos
 * @package public
 * @author Vitor André <tempestwq@gmail.com>
 *
 */
class Product
{
    /**
     * Define o preço do produto
     * @var float
     */
    private float $priceProduct;
    /**
     * Define o valor do desconto
     * @var int
     */
    private int $discountProduct;


    /**
     * Método para setting de desconto do produto
     * @param int $discountProduct Salvar o desconto do produto
     * @return void
     */
    public function setDiscountProduct(int $discountProduct): void
    {
        $this->discountProduct = $discountProduct;
    }
    public function setPriceProduct(float $priceProduct): void
    {
        if (is_numeric($priceProduct) AND $priceProduct > 0){
            $this->priceProduct = $priceProduct;
        }else{
            throw new Exception('Coloque apenas números');
        }
    }
    public function getPriceProduct(): float
    {
        return $this->priceProduct - $this->discountProduct;
    }

}

try {
    $product = new Product();
    $product->setPriceProduct(100);
    $product->setDiscountProduct(20);
    echo $product->getPriceProduct();
} catch (Exception $e){
    var_dump($e->getMessage());
}
