<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
    <title>Login</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="../css/index.css">
  </head>
<body>
  
  <div class="container">
    
    
    <form class="form" action="" method="POST">
      <!-- <div class="alert alert-danger" role="alert">
          <?= $msn == null ? '' : $msn->acessInvalid() ?>
          </div> -->
      
      <p class="form-title">Login</p>
      <div class="input-container">
        <input placeholder="Entrar com e-mail" type="email" name="email">
        <span>
          <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
          </svg>
        </span>
      </div>
      <div class="input-container">
        <input placeholder="Entrar com a senha" type="password" name="senha">
  
        <span>
          <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
            <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
          </svg>
        </span>
      </div>
      <button class="submit" type="submit">
        Entrar
      </button>
  
      <p class="signup-link">
        Não tem conta?
        <a href="/novo-usuario">cadastro</a>
      </p>
    </form>
  </div>

</body>

</html>