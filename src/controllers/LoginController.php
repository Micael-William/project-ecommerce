<?php
namespace Ecommerce\login;

use Ecommerce\model\UsuarioModel;
use Ecommerce\entidade\Usuario;
class LoginController {
    public static function view(){
        return require_once "../views/login.php";
    }
}