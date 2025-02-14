<?php
namespace Ecommerce\editProductForm;

use Ecommerce\model\ProdutoModel;
class EditProductForm {

    public static function view(){
        $id = isset( $_GET["id"] ) ? intval( $_GET["id"] ) :0;

        $product = new ProdutoModel();
        $array = $product->getProduto($id);

        return require_once "../views/editar-produto.php";
    }
}