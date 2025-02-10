<?php
require_once "../vendor/autoload.php";

use Ecommerce\login\LoginController;
use Ecommerce\produto\ListagemController;
use Ecommerce\entidade\Usuario;
use Ecommerce\novoUsuario\NovoCadastroController;
use Ecommerce\formularioNovoUsuario\FormCadastroController;
use Ecommerce\usuario\ListagemUsuarioController;


$pathInfo = $_SERVER['PATH_INFO'];
$httpMethod = $_SERVER['REQUEST_METHOD'];


var_dump($pathInfo);

switch ($pathInfo){
    case '/':
        LoginController::view();
    break;
    case '/login':
        LoginController::view();
    break;
    case '/novo-usuario':
        FormCadastroController::view();
        $req = new NovoCadastroController();
        $req->requisicao();
    break;
    case '/usuarios':
        ListagemUsuarioController::view();
    break;

    case '/produtos':
        ListagemController::view();
    break;
}


