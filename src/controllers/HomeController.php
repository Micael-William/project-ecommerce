<?php
namespace Ecommerce\HomeController;

use Ecommerce\listProduct\ListProduct;
use Ecommerce\model\ProdutoModel;

class HomeController  {
    public static function view (){
        $produtos = new ListProduct();
        
        return require_once  __DIR__ . "/../../views/home/index.php";
    }
}