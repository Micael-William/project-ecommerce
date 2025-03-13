<?php
namespace Ecommerce\config;
use PDO;
class Conexao{
    
    public function getConexao(){
        $banco  = "../db_ecommerce.sqlite";
        return new PDO("sqlite:".$banco);
    }
}

$con = new Conexao();

// Exclui a tabela tb_produto se existir
// $con->getConexao()->exec("DROP TABLE IF EXISTS tb_produto;");


$con->getConexao()->exec(
    "CREATE TABLE IF NOT EXISTS tb_produto
    (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome TEXT NOT NULL,
        descricao TEXT,
        preco REAL NOT NULL,
        quantidade INTEGER NOT NULL,
        imagem_path TEXT
    );"
);

$columns = $con->getConexao()->query("PRAGMA table_info(tb_produto);")->fetchAll(PDO::FETCH_ASSOC);


// echo "<pre>";
// print_r($columns);
// echo "</pre>";
$result = $con->getConexao()->query("SELECT * FROM tb_produto;")->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);
// echo "</pre>";