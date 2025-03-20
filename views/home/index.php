<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <title>mw - Ecommerce</title>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="./css/index.css">

  
</head>


<body>

  <!-- CABEÇALHO -->
  <header>
    <i class="bi bi-list menu-mobile"></i>
   
    <a href="/home">Ecommerce</a>

    <!-- <div class="link"></div> -->
   
    <div class="container-links">
      <div class="links">
        <a title="perfil" href=""><i class="bi bi-person-fill"></i></a>
        <a title="Favoritos" href=""><i class="bi bi-heart"></i></a>
        <a title="Carrinho" href=""><i class="bi bi-cart cart"></i></a>
        <span class="notificacao-carrinho">0</span>
        <span class="notificacao-favoritos">0</span>
      </div>
    </div>
  </header>

  <!-- MENU -->
  <nav>
    <div class="abrir-menu fechar-menu">
      <div class="layout-menu">
        <div class="container-menu-links">
          <div class="perfil">
            <svg width="62" height="62" fill="none" xmlns="http://www.w3.org/2000/svg" alt="usuario sem    foto"><path d="M31 0c17.12 0 31 13.88 31 31 0 17.12-13.88 31-31 31C13.88 62 0 48.12 0 31 0 13.88 13.88 0 31 0z" fill="#CCC"></path><path d="M31 16.174a9.435 9.435 0 100 18.87 9.435 9.435 0 000-18.87zm0 21.565c-2.916 0-7.17.942-10.492 2.367-3.889 1.669-5.682 3.496-5.682 5.142 0 .32.279.578.622.578h31.104c.343 0 .622-.259.622-.578 0-1.646-1.793-3.473-5.682-5.142C38.171 38.681 33.917 37.74 31 37.74z" fill="#888"></path>
            </svg>
            <span>Entre ou cadastre-se</span>

            <!-- <div class="container-botao">
              <a href="">entrar</a>
              <a href="">cadastrar</a>
            </div> -->
          </div>
          <i class="bi bi-x-lg close"></i>
        </div>
    

        <ul class="lista-menu">
          <li class="item-menu">
            <a href="/favoritos" class="link-favorito" href="#"><i class="bi bi-heart-fill meus-favoritos"></i>Meu favoritos</a>
            <i class="bi bi-arrow-right-short arrow-right"></i>
          </li>
        </ul>

        
      </div>
    </div>
  </nav>

  
  <section class="container-menu">
    <form action="" method="POST">
      <input type="text" placeholder="Busque aqui seu produto" class="">
      <button type="submit" class="busca"><i class="bi bi-search"></i></button>
    </form>
  </section>

  <!-- END MENU -->


  <!-- SEÇÃO IMAGEM -->
  <section class="secao-imagens">
    <ul class="lista-imagens">
      <?php foreach ($produtos->getProducts() as $produto): ?>
        <li>
          <img class="banner" src="<?= $produto['path'] . $produto['imagem']; ?>" alt="">
          <span class="legenda"><?= substr($produto['nome'], 0, 5); ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
  <!-- END SEÇÃO IMAGEM -->
  

  <!-- CONTAINER PRINCIPAL -->
  <div class="container-principal">
    <section class="secao-titulo">
      <h1>Produtos novos e <br>lançamentos</h1>
      <br>
      <p>1.500 produtos encontrados</p>
    </section>
  
 
    <main>
      <?php foreach ($produtos->getProducts() as $produto): ?>
        <br>
        <div class="container-produto">
          
          <span class="quantidade">(<?= $produto['quantidade']; ?>)</span>
          <span class="favoritar"><i class="bi bi-heart-fill favoritar"></i></span>
          <br>
          <img class="logo-produto" src="<?= $produto['path'] . $produto['imagem']; ?>" alt="<?= $produto['descricao'] ?>">
          <br>
          <div class="avaliacao">
            <i class="bi bi-star-fill icone-star"></i>
            <i class="bi bi-star-fill icone-star"></i>
            <i class="bi bi-star-fill icone-star"></i>
            <i class="bi bi-star-fill icone-star"></i>
            <i class="bi bi-star-fill icone-star"></i>
          </div>
          <br>
          <span class="nome-produto"><?= $produto['nome']; ?></span>
          <br>
          <span><?= $produto['descricao']; ?></span>
          <br>
          <span class="preco-produto">R$ <?= number_format($produto['preco'], 2, ",", ".") ?></span>
          <br>
          <button class="btn-carrinho"><i class="bi bi-cart cart"></i>Adicionar no carrinho</button>
        </div>
      <?php endforeach; ?>
    </main>
  </div>
  <!-- END CONTAINER PRINCIPAL -->


  <!-- RODAPE -->
  <footer>
    <div class="conteudo-rodape">
      <p>Desenvolvido por Micael William Copyright© <?= date('Y') ?></p>
    </div>
  </footer>

  <!-- END RODAPE -->
  <script src="./js/index.js"></script>
</body>
</html>
