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
  

    <section class="highlight-matches">
      <div class="match-card"> Acontecendo <br>agora <br>
        <div class="teams">
          <img src="../style/assets/bandeira5.png" alt="Time 1" />
          <span>vs</span>
          <img src="../bandeira3.png" alt="Time 2" />
        </div>
      </div>
      <br>
      <div class="match-card"> Acontecendo agora
        <p><div class="teams"></p>
          <img src="../banderiaaa.png" alt="Time 1" /><br>
          <span>vs</span>
          <img src="../style/assets/bandeira8.png" alt="Time 2" />
        </div>
      </div>
    </section>

    <section class="today-matches">
      <div class="match-box"> AINDA HOJE!! 
        <p class="time"> <br></p>
        <div class="teams">
          <img src="../style/assets/bandeira4.png" alt="Time 1" />
          <span>vs</span>
          <img src="../style/assets/bandeira2.png" alt="Time 2" />
        </div>
        <div class="odds">
          <span>1</span><span>1.5</span>
          <span>x</span><span>4.0</span>
          <span>2</span><span>7.0</span>
        </div>
      </div>

      <div class="match-box"> AINDA HOJE!!
        <p class="time">  <br></p>
        <div class="teams">
          <img src="../style/assets/bandeira5.png" alt="Time 1" />
          <span>vs</span>
          <img src="../style/assets/bandeira6.webp" alt="Time 2" />
        </div>
        <div class="odds">
          <span>1</span><span>1.2</span>
          <span>x</span><span>4.0</span>
          <span>2</span><span>?</span>
          <br>
        </div>
      </div>
    </section>

    <footer>

      
      <a href="fazerset.html" target="_blank">
  <button class="footer-btn primary">Fazer Set</button>
</a>
    </footer>
  </div>
</body>
</html>