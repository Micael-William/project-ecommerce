<?php
namespace Ecommerce\formularioNovoUsuario;

use Ecommerce\entidade\Usuario;
use Ecommerce\model\UsuarioModel;
class FormCadastroController extends UsuarioModel{
    public  static function view(){
        require_once "../views/cadastro.php";
    }
}