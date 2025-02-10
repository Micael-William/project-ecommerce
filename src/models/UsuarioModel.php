<?php

namespace Ecommerce\model;
use Ecommerce\entidade\Usuario;
use Ecommerce\config\Conexao;
use PDO;

class UsuarioModel extends Conexao{

    private $tabela = "tb_usuario";
    public function __construct() {
    }
    public function create(Usuario $usuario){
        
        $stmt = $this->getConexao()->prepare("INSERT INTO {$this->tabela}
        (id, nome, email, senha) VALUES (:id, :nome, :email, :senha);");
        $stmt->bindValue(":id", $usuario->getId());
        $stmt->bindValue(":nome", $usuario->getNome());
        $stmt->bindValue(":email", $usuario->getEmail());
        $stmt->bindValue(":senha", $usuario->getSenha());

        return $stmt->execute();
    }

    public function filter($post){
        $stmt = null;

        if(isset($post["email"]) && isset($post["senha"])){
            $sql = "SELECT email, senha FROM {$this->tabela} WHERE email=:email AND senha=:senha";
            $stmt = $this->getConexao()->prepare($sql);
            $stmt->bindValue(":email", $post["email"]);
            $stmt->bindValue(":senha", $post["senha"]);
            return $stmt->execute();
        }

    }

    public function all(){
        $sql = "SELECT * FROM {$this->tabela};";
        $stmt = $this->getConexao()->query($sql);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}