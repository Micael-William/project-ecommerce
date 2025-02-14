<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Editar Produto</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/edit-product.css">
  </head>

  <body>
    <br>
    <br>
    <br>
  <div class="container mt-4">
      <form  action="" method="POST" class="row g-3" enctype="multipart/form-data">
        <h3>Editar Produto</h3>
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" id="nome" value="<?= $array['nome'] ?>">
        </div>
        <div class="col-md-6">
          <label for="descricao" class="form-label">Preço</label>
          <input type="text" name="preco" class="form-control" id="descricao" value="<?= $array['preco']; ?>">
        </div>
        <div class="col-12">
          <label for="quantidade" class="form-label">Quantidade</label>
          <input type="text" name="quantidade" class="form-control" id="quantidade" value="<?= $array['quantidade'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"> <?= $array['descricao'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Anexar imagem</label>
            <input class="form-control" name="image" type="file" id="formFile">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </form>
  </div>
  </body>
</html>
