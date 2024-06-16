<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style5.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Pagina Inicial</title>
</head>
<body>
  <div class="preloader" id="preloader">
    <div class="loader" id="loader"></div>
  </div>
  <nav class="menu-lateral">
    <ul>
      <li class="item-menu">
        <a href="../index.html">
          <span class="icon"><i class="bi bi-house-door"></i></span>
          <span class="txt-link">Home</span>
        </a>
      </li>
      <li class="item-menu">
        <a href="../assistir/home.html">
          <span class="icon"><i class="bi bi-collection-play"></i></span>
          <span class="txt-link">Assistir</span>
        </a>
      </li>
      <li class="item-menu">
        <a href="../sobre/sobre.html">
          <span class="icon"><i class="bi bi-book"></i></span>
          <span class="txt-link">Sobre</span>
        </a>
      </li>
      <li class="item-menu">
        <a href="../conta/conta.html">
          <span class="icon"><i class="bi bi-person"></i></span>
          <span class="txt-link">Conta</span>
        </a>
      </li>
    </ul>
  </nav>
  <?php 
    $nome = $_GET['nome'] ?? 'SemNome';
    $email = $_GET['email'] ?? 'naosei.com';
  ?>
  <section>
    <img src="../img/642902-200.png" class="img">
    <br>
    <br>
    <h1>Sua Conta</h1>
    <br>
    <h3>Olá <?php echo $nome?>!</h3>
    <br>
    <p>
      SPeja Bem-vindo
      Descubra a riqueza da cultura e história do Egito através de nossa coleção de vídeos. Explore documentários, tours virtuais por monumentos icônicos e recriações históricas que trazem à vida a magia do Egito Antigo. Ideal para entusiastas, estudantes e amantes da cultura, nosso portal oferece uma janela única para os mistérios das pirâmides e a majestade dos faraós.
      <br>
      <br>
      <strong>Explore. Aprenda. Inspire-se.</strong>
      <br>
      Seu portal para o Egito Antigo começa aqui.
    </p>
    <br>
    <button><a href="../assistir/home.html" class="botão">Comece a Assistir</a></button>
  </section>
  <script src="../script_preloader.js"></script>
</body>

</html>