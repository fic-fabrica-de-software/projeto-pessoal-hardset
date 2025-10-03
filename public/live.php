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
    <nav>
        <script>
  function toggleMenu() {
    const menu = document.getElementById("menu");
    menu.classList.toggle("active"); // por exemplo
  }
</script>
      <img src="../style/assets/IESEM (1).png" alt="logo" id="logo_hardset">
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
  <main id="main_live">
    <h3>LIVE: <a href="https://www.youtube.com/live/AXiyo7ADubw?feature=shared"> <h3> 
  <img class="imlive" src="../style/assets/liveeimg.png" alt="Descrição da imagem" />
</a></h2>
  </main>
</body>
</html>