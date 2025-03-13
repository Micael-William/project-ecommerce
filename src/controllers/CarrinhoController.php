<?php
namespace Ecommerce\carrinho;
use Ecommerce\model\ProdutoModel;

class CarrinhoController {

    public function getProductJson()
    {
        $produtos = new ProdutoModel();
        return json_encode($produtos->getAllProdutos());
    }


    public function print(){
        print_r($this->getProductJson());
    }
}



