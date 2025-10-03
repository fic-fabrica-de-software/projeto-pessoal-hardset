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
          <li><a href="set's.php">Set's</a></li>
          <li><a href="fotos.php">Fotos</a></li>
 
        </ul>
      </div> 
    </nav>
</header>
<body>
    <div class="container-hoje">
        <h2>Hoje</h2>
        <hr>
        <div class="jogos-lista">
            <div class="jogo-card">
                <img src="../style/assets/bandeira6.webp" class="bandeira" alt="Bandeira">
                <div class="jogo-info">
                    <div class="jogo-titulo">Handebol Feminino</div>
                    <div class="jogo-horario">Horário: 07:20</div>
                </div>
                <img src="../bandeira3.png" class="bandeira" alt="Bandeira">
            </div>
            <div class="jogo-card">
                <img src="../style/assets/bandeira2.png" class="bandeira" alt="Bandeira">
                <div class="jogo-info">
                    <div class="jogo-titulo">Handebol Masculino</div>
                    <div class="jogo-horario">Horário: 07:20</div>
                </div>
                <img src="../style/assets/bandeira5.png" class="bandeira" alt="Bandeira">
            </div>
            <div class="jogo-card">
                <img src="../style/assets/bandeira4.png" class="bandeira" alt="Bandeira">
                <div class="jogo-info">
                    <div class="jogo-titulo">Handebol Feminino</div>
                    <div class="jogo-horario">Horário: 07:20</div>
                </div>
                <img src="../style/assets/bandeira8.png" class="bandeira" alt="Bandeira">
            </div>
            <div class="jogo-card">
                <img src="../style/assets/bandeira8.png" class="bandeira" alt="Bandeira">
                <div class="jogo-info">
                    <div class="jogo-titulo">Handebol Feminino</div>
                    <div class="jogo-horario">Horário: 08:00</div>
                </div>
                <img src="../style/assets/bandeira6.webp" class="bandeira" alt="Bandeira">
            </div>
            <div class="jogo-card">
                <img src="../style/assets/bandeira5.png" class="bandeira" alt="Bandeira">
                <div class="jogo-info">
                    <div class="jogo-titulo">Handebol Masculino</div>
                    <div class="jogo-horario">Horário: 08:00</div>
                </div>
                <img src="../style/assets/bandeira2.png" class="bandeira" alt="Bandeira">
            </div>
        </div>
    </div>
</body>
</html>