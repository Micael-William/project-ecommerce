<?php

namespace Ecommerce\editProduct;
use Ecommerce\model\ProdutoModel;
use Ecommerce\produto\Produto;
use Ecommerce\requisicao\InterfaceRequisicao;

class EditProduct implements InterfaceRequisicao{
    public function requisicao()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(isset($_GET["id"]))
            {
                $id = filter_input(INPUT_POST,"id", FILTER_SANITIZE_NUMBER_INT);
                $nome = filter_input(INPUT_POST,"nome");
                $descricao = filter_input(INPUT_POST,"descricao");
                $preco = filter_input(INPUT_POST,"preco");
                $quantidade = filter_input(INPUT_POST,"quantidade", FILTER_SANITIZE_NUMBER_INT);

                $product = new Produto($nome, $descricao, $preco, $quantidade);
                $product->setId(intval($_GET['id']));
                $imagePath = null;

                if($_FILES['image']['error'] === UPLOAD_ERR_OK)
                {
                   
                    $imagePath = $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'],  __DIR__ . '/../../public/img/uploads/' . $_FILES['image']['name']);
                
                    $product->setFile($imagePath);
                }
                else
                {
                    // $imagePath = null;
                    $product->setFile($imagePath);
                }
                $productModel = new ProdutoModel();

                if($productModel->updateProduct($product) === false)
                {
                    header("Location: /produtos?sucesso=0");
                    return;
                }else
                {
                    header("Location: /produtos?sucesso=1");
                    return;
                }
            }
        }
    }
}