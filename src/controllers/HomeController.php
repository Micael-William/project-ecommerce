<?php
namespace Ecommerce\HomeController;

use Ecommerce\model\ProdutoModel;

class HomeController  {
    public static function view (){
        $produto = new ProdutoModel();

        return require_once  __DIR__ . "/../../views/home/index.php";
    }
}