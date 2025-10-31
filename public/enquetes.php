
<?php


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/toggle.js" defer></script>
</head>
<header>
     <nav> 
        <script>
  function toggleMenu() {
    const menu = document.getElementById("menu");
    menu.classList.toggle("active"); // por exemplo
  }
</script>
      <p><img src="../style/assets/IESEM (1).png" alt="logo" id="logo_hardset"></p>
           <div class="menu-toggle" onclick="toggleMenu()">☰</div>
      <div id="menu">
        <ul>
          <li><a href="pagina_inicial.php">Início</a></li>
          <li><a href="hoje.php">Hoje</a></li>
          <li><a href="amanha.php">Amanhã</a></li>
          <li><a href="calendario.php">Calendario</a></li>
          <li><a href="enquetes.php">Enquetes</a></li>
          <li><a href="fotos.php">Fotos</a></li>
 
        </ul>
      </div> 
    </nav>
</header>
<body>
    <div class="container-hoje">
        <h2>Enquetes</h2>
        <hr>
        <div class="jogos-lista">
            <div class="jogo-card">
                <div class="jogo-info">
                    <h2>Qual torcida é a mais animada?</h2>
                </div>
            </div>
            <div class="jogo-card">
                <div class="jogo-info">
                    <h2>Quem vai ser o campeão deste ano?</h2>
                </div>
            </div>
            <div class="jogo-card">
                <div class="jogo-info">
                   <h2>Qual foi o melhor jogo?</h2>
                </div>
            </div>
            <div class="jogo-card">
                <div class="jogo-info">
                    <h2>Qual esporte novo você gostaria de ver no próximo ano?</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>