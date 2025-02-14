<?php
namespace Ecommerce\model;
use Ecommerce\produto\Produto;
use Ecommerce\config\Conexao;
use PDO;
class ProdutoModel extends Conexao {
    private $table = "tb_produto";

    public function getAllProdutos(): array {
        $array = $this->getConexao()->query("SELECT * FROM {$this->table};");
        return $array->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduto($id) {
        $stmt = $this->getConexao()->prepare("SELECT * FROM {$this->table} WHERE id=:id;");
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addProdutos(Produto $produto) {
        $sql = "INSERT INTO {$this->table} (nome, descricao, preco, quantidade)
        VALUES (:nome, :descricao, :preco, :quantidade)";

        $stmt = $this->getConexao()->prepare($sql);
        // $stmt->bindValue(":id", $produto->getId());
        $stmt->bindValue(":nome", $produto->getName());
        $stmt->bindValue(":descricao", $produto->getDescription());
        $stmt->bindValue(":preco", $produto->getPrice());
        $stmt->bindValue(":quantidade", $produto->getQuantity());
        
        return $stmt->execute();
    }

    public function updateProduct(Produto $produto) {
        $sql = "UPDATE {$this->table} SET nome=:nome,
                                        descricao=:descricao,
                                        preco=:preco,
                                        quantidade=:quantidade,
                                        imagem_path=:imagem_path
                                        WHERE id=:id;";

        $stmt = $this->getConexao()->prepare($sql);
        $stmt->bindValue(":id", $produto->getId());
        $stmt->bindValue(":nome", $produto->getName());
        $stmt->bindValue(":descricao", $produto->getDescription());
        $stmt->bindValue(":preco", $produto->getPrice());
        $stmt->bindValue(":quantidade", $produto->getQuantity());
        $stmt->bindValue(":imagem_path", $produto->getFile());

        return $stmt->execute();
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM {$this->table} WHERE id=:id;";
        $stmt = $this->getConexao()->prepare($sql);
        $stmt->bindValue(":id", $id);

        return $stmt->execute();
    }
}