<!DOCTYPE html>
<?php require_once "head.php"; ?>
<body class="">
    <?php require_once "nav.php"; ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container bg-light-subtle p-3">
        <table class="table align-middle table-responsive  mt-4">
            <thead class="align-middle" width="100%">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Estoque</th>
                    <th class="text-center" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="align-middle">

                <?php foreach ($produto->getAllProdutos() as $produto): ?>
                    <tr>
                        <td class=""><?= $produto['id'] ?></td>
                        <td class=""><img class="object-fit-xxl-contain border rounded " src="/img/uploads/<?= $produto['imagem_path'] ?>" width="70px" height="70px"></td>
                        <td class=""><?= $produto['nome'] ?></td>
                        <td><?= $produto['descricao']  ?></td>
                        <td class="">R$ <?= number_format($produto['preco'], 2, ",", ".") ?></td>
                        <td class=""><?= $produto['quantidade'] ?></td>
                        <td>
                            <a  class="btn btn-primary" href="/editar-produto?id=<?= $produto['id'] ?>">editar</a>
                            <a  class="btn btn-danger" href="/excluir-produto?id=<?= $produto['id'] ?>">excluir</a>
                        </td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>