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
    <div class="container-calendario">
        <h2>Calendário Jogos de Abril</h2>
        <hr>
        <table class="calendario-simples">
            <thead>
                <tr>
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sáb</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4</td>
                </tr>
                <tr>
                    <td>5</td><td>6</td><td>7</td><td><b>8</b></td><td>9</td><td>10</td><td>11</td>
                </tr>
                <tr>
                    <td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td>
                </tr>
                <tr>
                    <td>19</td><td>20</td><td>21</td><td>22</td><td><b>23</b></td><td><b>24</b></td><td>25</td>
                </tr>
                <tr>
                    <td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container-calendario">
        <h2>Calendário Jogos de Junho</h2>
        <hr>
        <table class="calendario-simples">
            <thead>
                <tr>
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sáb</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4</td>
                </tr>
                <tr>
                    <td>5</td><td>6</td><td>7</td><td>8</td><td><b>9</b></td><td><b>10</b></td><td>11</td>
                </tr>
                <tr>
                    <td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td>
                </tr>
                <tr>
                    <td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td><b>24</b></td><td>25</td>
                </tr>
                <tr>
                    <td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <p><br>.           obs: os dias em negrito são os dias de jogos!</p>
</body>
</html>