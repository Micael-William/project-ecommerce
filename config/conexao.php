<?php
namespace Ecommerce\config;
use Pdo;
class Conexao{
    
    public function getConexao(){
        $banco  = "db_ecommerce.sqlite";
        return new PDO("sqlite:".$banco);
    }
}


$con = new Conexao();
$con->getConexao();
$con->getConexao()->exec(
    "CREATE TABLE IF NOT EXISTS tb_usuario 
    (
        id INT,
        nome TEXT,
        email TEXT,
        senha TEXT
    );
    "
);