<?php

return [
    'GET|/' => \Ecommerce\login\LoginController::class,
    'GET|/login' => \Ecommerce\login\LoginController::class,
    'POST|/login' => \Ecommerce\login\LoginController::class,
    'GET|/novo-cadastro' => \Ecommerce\cadastro\FormCadastroController::class,
    'POST|/novo-cadastro' => \Ecommerce\novoUsuario\NovoCadastroController::class,
    'GET|/listagem-usuario' => Ecommerce\listagem\ListagemController::class
    // 'POST|/listagem' => Ecommerce\listagem\ListagemController::class
];