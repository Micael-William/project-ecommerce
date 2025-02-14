<?php
namespace Ecommerce\logoutAcessUser;
use Ecommerce\requisicao\InterfaceRequisicao;

class LogoutController implements InterfaceRequisicao {
    public function __construct(){
        $this->requisicao();
    }
    public function requisicao(){
        session_destroy();

        header("Location: /login");
    }
}