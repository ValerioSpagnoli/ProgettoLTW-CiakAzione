<?php
  session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style(0-576).css" media="screen and (min-width: 0px)">
  <link rel="stylesheet" href="./css/style(576-768).css" media="screen and (min-width: 576px)">
  <link rel="stylesheet" href="./css/style(768-1200).css" media="screen and (min-width: 768px)">
  <link rel="stylesheet" href="./css/style(1200).css" media="screen and (min-width: 1200px)">

  <title>Ciak & Azione</title>


</head>

<body class="body" onload="leggiCookie();">

    <!-- NAVBAR -->
    <div class="grid-item-navbar">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(0, 0, 0);">
  
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php" name="top">
            <img src="../image/logo/logo.png"  width="70px" height="70px" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(217, 217, 217, 0.916);">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarText">
  
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  
              <li class="nav-item btn-navbar">
                <a class="nav-link" aria-current="page" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../index.php">Home</a>
              </li>
  
              <li class="nav-item btn-navbar">
                <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../i nostri cinema/inostricinema.php">I nostri cinema</a>
              </li>
  
              <li class="nav-item btn-navbar">
                <a class="nav-link active" style="color: rgb(220, 220, 217); padding-left: 10px;" href="#">Programmazione</a>
              </li>
  
              <li class="nav-item btn-navbar">
                <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../offerte/offerte.php">Offerte</a>
              </li>
  
              <li class="nav-item btn-navbar">
                <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../index.php#chi-siamo">Chi siamo</a>
              </li>
  
            </ul>
  
            <span class="navbar-text">

              <div class="btn-areapersonale">
              
                <?php
                  if(!isset($_SESSION['nome'])){
                    echo(" <a class='nav-link' href='../area personale/login/login.php'>Area Personale</a> "); 
                  }
                  else{
                    echo(" <a class='nav-link' href='../area personale/profilo.php'> Ciao ");
                    echo($_SESSION['nome']);
                    echo("! </a> ");
                  }
                ?>

              </div>

            </span>

          </div>
        </div>
      </nav>
  
    </div>

    <!-- PROGRAMMAZIONE -->
    <div class="grid-item">
  
      <div class="programmazione">
        PROGRAMMAZIONE 
      </div>
  
    </div>

    
    <!-- SCELTA CINEMA -->
    <div class="grid-item">

      <div class="sceltacinema">
        <select id="scelta" required style="width: 100%; height: 100%; background-color: rgba(217, 217, 217, 0.916); border-radius: 15px; text-align: center;" onchange="filter();">
          <option value="Tutti i Cinema" selected>Tutti i Cinema</option>
          <option value="SanLorenzo">Ciak & Azione San Lorenzo, Roma</option>
          <option value="Latina">Ciak & Azione Latina</option>
          <option value="Cerveteri">Ciak & Azione Cerveteri</option>
        </select>
      </div>

    </div>
    

    <!-- LOCANDINE -->
    <div class="grid-item">
      <div class="locandine">

        <div class="l1" id="sanlorenzo-cerveteri-latina">
          <a href="../film/film.php" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (1).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Uncharted
            </footer>
          </a> 
        </div>

        <div class="l2" id="latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (2).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              La figlia oscura
            </footer>
          </a> 
        </div>
        <div class="l3" id="sanlorenzo">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (3).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Gli idoli delle donne
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-cerveteri">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (4).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Il sesso degli angeli
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (5).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              La cena perfetta
            </footer>
          </a>
        </div>
        <div class="l3" id="latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (6).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Sulle nuvole
            </footer>
          </a>
        </div>
        <div class="l3" id="cerveteri">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (7).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Amma's way
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-cerveteri-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (8).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              L'arma dell'inganno
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-cerveteri-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (9).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Twenty one pilots
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-cerveteri-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (10).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Spencer
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-cerveteri-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (11).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              I segreti di Silente
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (12).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              The lost city
            </footer>
          </a>
        </div>
        <div class="l3" id="cerveteri-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (13).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Una vita in fuga
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (14).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              This much I know to be true
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-cerveteri-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (15).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Top gun
            </footer>
          </a>
        </div>
        <div class="l3" id="cerveteri-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (16).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Sing
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-cerveteri-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (17).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              The northman
            </footer>
          </a>
        </div>
        <div class="l3" id="sanlorenzo-latina">
          <a href="../film/film.html" style="color: rgb(156, 101, 0); text-decoration: none;">
            <img src="../image/locandine/locandina (18).jpg" style="margin:30px" width="80%" height="80%">
            <footer class="footer-locandine">
              Corro da te
            </footer>
          </a>
        </div>
        
      </div>
    </div>

    
  <!-- FOOTER -->
  <footer class="footer"
    style="background-color: rgba(81, 81, 81, 0.705);  text-align: center; font-family: 'Vollkorn', serif; margin-top: 3%;">

    <a href="#top"><img src="../image/logo/logo.png" width="50px" height="50px" alt=""></a>
    <br>
    <span style="color: rgb(220, 220, 217);">Ciak&Azione 2022©Tutti i diritti riservati.</span>

  </footer>






  <script src="./js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
  crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>

</html>