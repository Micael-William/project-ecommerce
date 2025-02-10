<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Cadastro</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
    body {
      background-color: #feeeff;
    }
    .container {
      /* border: 1px solid #000; */
      width: 30vw;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 70vh;
      margin-top: 20px;
    }
    form{
      width: 40vw;
    }
    button {
      width: 13vw;
    }
  </style>
  </style>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
        <div class="container">
    <form method="POST" action="">
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
      <a href="/login">fazer login</a>
    </form>
    </form>
  </div>
      
    <!-- End Example Code -->
  </body>
</html>