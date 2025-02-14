<?php
namespace Ecommerce\login;

use Ecommerce\Message\MessageController;
use Ecommerce\model\UsuarioModel;
use Ecommerce\entidade\Usuario;
class LoginController {
    public static function view(){
        $msn = isset($_GET['erro']) ? new MessageController() : null;

        return require_once "../views/login.php";
    }
}