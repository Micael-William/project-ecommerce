
<?php
require_once "../vendor/autoload.php";

use Ecommerce\editProduct\EditProduct;
use Ecommerce\editProductForm\EditProductForm;
use Ecommerce\login\LoginController;
use Ecommerce\entidade\Usuario;
use Ecommerce\loginAcessUser\LoginAcessUserController;
use Ecommerce\logoutAcessUser\LogoutController;
use Ecommerce\novoUsuario\NovoCadastroController;
use Ecommerce\formularioNovoUsuario\FormCadastroController;
use Ecommerce\HomeController\HomeController;
use Ecommerce\produtoController\ListagemProdutoController;
use Ecommerce\usuario\ListagemUsuarioController;
use Ecommerce\produtoController\NewProdutoController;

session_start();
$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

if (!array_key_exists('logado', $_SESSION) && $pathInfo !== '/login') {
    header('Location: /login');
}

switch ($pathInfo) {
    case '/':
        LoginController::view();
        $req = new LoginAcessUserController();
        $req->requisicao();
        break;
    case '/login':
        LoginController::view();
        $req = new LoginAcessUserController();
        $req->requisicao();
        break;
    case '/logout':
        new LogoutController();
        break;
    case '/novo-usuario':
        FormCadastroController::view();
        $req = new NovoCadastroController();
        $req->requisicao();

        break;
    case '/usuarios':
        ListagemUsuarioController::view();
        break;
    case '/home':
        HomeController::view();
        break;
    case '/produtos':
        ListagemProdutoController::view();
        break;

    case '/editar-produto':
        EditProductForm::view();
        $req = new EditProduct();
        $req->requisicao();
        break;
    default:
        echo "Página não encontrada";
        break;
}
