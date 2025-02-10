<?php
namespace Ecommerce\usuario;
class ListagemUsuarioController {
    public static function view() {
        return require_once '../views/usuarios.php';
    }
}