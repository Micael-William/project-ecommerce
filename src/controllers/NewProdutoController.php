<?php

namespace Ecommerce\produtoController;

use Ecommerce\produto\Produto;
use Ecommerce\listProduct\ListProduct;
use Ecommerce\model\ProdutoModel;

class NewProdutoController
{
    public  function create()
    {
       
        $list = new ListProduct();
        $products = [];

        foreach ($list->getProducts() as $produto){
            $product = new Produto( $produto["nome"], $produto["descricao"], $produto["preco"], $produto["quantidade"]);

            $model = new ProdutoModel();
            $model->addProdutos($product);
        }
    }
}
?>