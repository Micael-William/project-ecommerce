<?php
namespace Ecommerce\listProduct;
class ListProduct {

    public function getProducts(): array{
        return  [
            [
                "id" => 1,
                "nome" => "Camiseta",
                "descricao" => "Camiseta de algodão",
                "preco" => 50.00,
                "quantidade" => 100
            ],
            [
                "id" => 2,
                "nome" => "Calça",
                "descricao" => "Calça jeans",
                "preco" => 100.00,
                "quantidade" => 50
            ],
            [
                "id" => 3,
                "nome" => "Tênis",
                "descricao" => "Tênis esportivo",
                "preco" => 200.00,
                "quantidade" => 30
            ],
            [
                "id"=> 4,
                "nome"=> "Bermuda",
                "descricao"=> "Bermuda de tactel",
                "preco"=> 70.00,
                "quantidade"=> 70
            ],
            [
                "id"=> 5,
                "nome"=> "Meia",
                "descricao"=> "Meia de algodão",
                "preco"=> 10.00,
                "quantidade"=> 200
            ],
        ];

    }
}