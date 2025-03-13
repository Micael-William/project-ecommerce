<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <title>Ecommerce</title>
  <link rel="stylesheet" href="./css/index.css">
  <!--<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmhpu6Gmdz658N_iiciYk8WbR3RUJqbf4&callback=initMap"></script>-->
</head>


<body>

  <header>
    <div class="link-menu">
      <a href="/home">Ecommerce</a>
    </div>
   <i class="bi bi-list menu-mobile"></i>
  </header>

  <div class="abrir-menu fechar-menu">
    <i class="bi bi-x-lg close"></i>
    <a href="#">teste@gmail.com</a>
    <a href="#">São Paulo - SP</a>
    <a href="/home">Produtos</a>
    <a href="#">Perfil</a>
    <a href="/login">Login</a>
  </div>



  
  <section class="container-menu">
  
    <form action="" method="POST">
      <div>
        <input type="text" placeholder="Busque aqui seu produto" class="">
        <button type="submit" class="busca"><i class="bi bi-search"></i></button>
      </div>
    </form>
    

    <div class="container-links">

      <div class="links">
        <a title="perfil" href=""><i class="bi bi-person-fill"></i></a>
        <a title="Favoritos" href=""><i class="bi bi-heart"></i></a>
        <a title="Carrinho" href=""><i class="bi bi-cart cart"></i></a>
        <span class="notificacao-carrinho">0</span>
        <span class="notificacao-favoritos">0</span>
      </div>

    </div>

  </section>

  
  <section class="secao-imagens">

    <ul>
      <li></li>
      <li><img class="banner" src="img/uploads/celular.webp" alt=""></li>
      <li><img class="banner" src="img/uploads/computador.webp" alt=""></li>
    </ul>
  </section>
  


  <section class="secao-categoria">
    <p class="item-categoria">Eletrônicos</p>
    <p class="item-categoria">Informática</p>
    <p class="item-categoria">Acessórios</p>
  </section>

  <br>
  <br>
  <br>
  <!-- <section>
    <h1>Produtos</h1>
  </section> -->
  <br>
  <br>
  <br>


  <main>
    <?php foreach ($produtos->getProducts() as $produto): ?>
      <br>
      <div class="container-produto">
        
        <span class="quantidade">(<?= $produto['quantidade']; ?>)</span>
        <span class="favoritar"><i class="bi bi-heart-fill favoritar"></i></span>
        <br>
        <img class="logo-produto" src="<?= $produto['path'] . $produto['imagem']; ?>" alt="<?= $produto['descricao'] ?>" width="200px" height="200px">
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
  <!-- <button onclick="getLocation()">Obter Localização</button>
    <div id="map" style="width: 100%; height: 400px;"></div> -->

    <script>
      
        // function initMap() {
        //     console.log("API carregada corretamente");
        // }

        // function getLocation() {
        //     if (navigator.geolocation) {
        //         navigator.geolocation.getCurrentPosition(showPosition, showError);
        //     } else {
        //         alert("Geolocalização não suportada pelo seu navegador.");
        //     }
        // }

        // function showPosition(position) {
        //     var lat = position.coords.latitude;
        //     var lng = position.coords.longitude;
        //     var map = new google.maps.Map(document.getElementById("map"), {
        //         center: { lat: lat, lng: lng },
        //         zoom: 15
        //     });
        //     new google.maps.marker.AdvancedMarkerElement({
        //         position: { lat: lat, lng: lng },
        //         map: map
        //     });
        // }

        // function showError(error) {
        //     switch (error.code) {
        //         case error.PERMISSION_DENIED:
        //             alert("Usuário negou a solicitação de geolocalização.");
        //             break;
        //         case error.POSITION_UNAVAILABLE:
        //             alert("Informações de localização indisponíveis.");
        //             break;
        //         case error.TIMEOUT:
        //             alert("A solicitação para obter a localização expirou.");
        //             break;
        //         case error.UNKNOWN_ERROR:
        //             alert("Ocorreu um erro desconhecido.");
        //             break;
        //     }
        // }

        // document.addEventListener("touchmove", function(event) {}, { passive: true });
        // document.addEventListener("touchstart", function(event) {}, { passive: true });

    </script>
    </scrip>
  <script src="./js/index.js"></script>
</body>
</html>