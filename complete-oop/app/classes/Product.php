<?php

namespace app\classes;
/**
 * Classe de Produtos
 *
 * Classe para Construção de Produtos
 *
 * @package classes
 * @author Vitor André <tempestwq@gmail.com>
 */

class Product
{
    /**
     * Propriedade para Nome do Produto
     * @var string
     */
    public string $name;
    /**
     * Propriedade para Descrição do Produto
     * @var string
     */
    public string $description;


    public function info()
    {
        return 'info';
    }
}