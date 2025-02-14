<?php
namespace Ecommerce\produtoController;

use Ecommerce\model\ProdutoModel;
use Ecommerce\produtoController\NewProdutoController;
class ListagemProdutoController {

    public static function view(){
        // $list = new NewProdutoController();
        // chama o método create que cria os produtos no banco de dados
        // $list->create();
        
        $produto = new ProdutoModel();
      
        return require_once "../views/produtos.php";
    }
}