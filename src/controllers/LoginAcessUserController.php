<?php

namespace Ecommerce\loginAcessUser;

use Ecommerce\config\Conexao;
use Ecommerce\requisicao\InterfaceRequisicao;

class LoginAcessUserController implements InterfaceRequisicao
{
  private $http = "POST";

  public function requisicao()
  {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = filter_input(INPUT_POST, 'email');
      $senha = filter_input(INPUT_POST, 'senha');


      $sql = "SELECT * FROM tb_usuario WHERE email=:email;";
      $conexao = new Conexao();
      $stmt = $conexao->getConexao()->prepare($sql);
      $stmt->bindValue(':email', $email);
      $stmt->execute();

      $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);



      if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['logado'] = true;

        header('Location: /produtos');
      } else {
        // session_destroy();
        header('Location: /login?erro=1');
      }
    }
  }
}
