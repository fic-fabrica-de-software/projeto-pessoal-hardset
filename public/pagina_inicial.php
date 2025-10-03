<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hardset</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/toggle.js" defer></script>
</head>
<body>
  <header>
    <script>
  function toggleMenu() {
    const menu = document.getElementById("menu");
    menu.classList.toggle("active"); // por exemplo
  }
</script>
    <nav>
      <img src="../style/assets/IESEM (1).png" alt="logo" id="logo_hardset">
      <div class="menu-toggle" onclick="toggleMenu()">☰</div>
      <div id="menu">
        <ul>
          <li><a href="pagina_inicial.html">Início</a></li>
         <li><a href="hoje.html">Hoje</a></li>
          <li><a href="amanha.html">Amanhã</a></li>
          <li><a href="calendario.html">Calendario</a></li>
          <li><a href="set's.html">Set's</a></li>
          <li><a href="fotos.html">Fotos</a></li>
        </ul>
      </div>
    </nav>
  </header>
<body>
     
  <div class="podium">
    <div class="p1"><img class="bandeiraa" src="../bandeira3.png"></div>
    <div class="p2"><img class="bandeiraa" src="../style/assets/bandeira6.webp"></div>
    <div class="p3"><img class="bandeiraa" src="../style/assets/bandeira2.png"></div>
  </div>

  <div class="card">
    <h2>ACONTECENDO AGORA</h2>
    <div class="match">
      <div>
        <img src="../style/assets/bandeira8.png" alt="Team1" >
        <p>2</p>
      </div>
      <span><b>vs</b></span>
      <div>
        <img src="../style/assets/bandeira5.png" alt="Team2">
        <p>1</p>
      </div>
    </div>
  </div>

  <div class="gallery">
    <img src="../style/assets/trofeu.JPG" alt="Winners">
    
    <img src="../style/assets/turmasc.JPG" alt="Winners">
        <img src="../style/assets/turma.JPG" alt="Winners">
    <img src="../style/assets/trofeeeu.JPG" alt="Winners">

  </div>
  <div class="card">
  <h2>ARRECADAÇÃO ATUAL</h2>
    <div class="match">
      ITENS DE HIGIENE - 300 KITS <br> <br>
      RAÇÃO - 200KG <br> <br>
      ARROZ E FEIJÃO - 600KG 
      
      </div>
    </div>
  </div>
</body>
</html>
</html>