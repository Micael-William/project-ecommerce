<?php
namespace Ecommerce\novoUsuario;
use Ecommerce\entidade\Usuario;
use Ecommerce\model\UsuarioModel;
use Ecommerce\requisicao\InterfaceRequisicao;

class NovoCadastroController implements InterfaceRequisicao {

    public function requisicao() 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
            $senha = filter_input(INPUT_POST, 'senha'); // Corrigido para 'senha'

            if (empty($nome) || empty($email) || empty($senha)) 
            {
                header("Location: /login?erro=0");
                return;
            }
            $senhaCriptografada = password_hash($senha, PASSWORD_ARGON2ID);

            $model = new UsuarioModel();
            $usuario = new Usuario( $nome, $email, $senhaCriptografada);   
            $retorno = $model->create($usuario);

            if ($retorno == false) 
            {
                header("Location: /login?sucesso=0");
            } else 
            {
                header("Location: /login?sucesso=1");
            }
        }
    }
}