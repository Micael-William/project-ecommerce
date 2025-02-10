<?php
namespace Ecommerce\novoUsuario;
use Ecommerce\entidade\Usuario;
use Ecommerce\model\UsuarioModel;

class NovoCadastroController {

    public function requisicao() 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
            $senha = filter_input(INPUT_POST, 'senha'); // Corrigido para 'senha'

            if (empty($nome) || empty($email) || empty($senha)) 
            {
                header("Location: /login?erro=Campos obrigatórios não preenchidos");
                return;
            }

            $model = new UsuarioModel();
            $usuario = new Usuario(10, $nome, $email, $senha);   
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