<?php
use Ecommerce\model\UsuarioModel;
$model = new UsuarioModel();

echo '<pre>';
var_dump($model->all());
echo '</pre>';


?>

<ul>
    <?php foreach ($model->all() as $usuario): ?>
        <li>id:<?= $usuario["id"]; ?></li>
        <li>Nome:<?= $usuario["nome"]; ?></li>
        <li>Email:<?= $usuario["email"]; ?></li>
    <?php endforeach; ?> 
</ul>