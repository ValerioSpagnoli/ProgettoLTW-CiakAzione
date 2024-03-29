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


<body class="body">

  <!-- NAVBAR -->
  <div class="grid-item-navbar">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(0, 0, 0);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" name="top">
          <img src="./image/logo/logo.png" width="70px" height="70px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(217, 217, 217, 0.916);">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item btn-navbar">
              <a class="nav-link active" aria-current="page" style="color: rgb(220, 220, 217); padding-left: 10px;" href="#">Home</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="./i nostri cinema/inostricinema.php">I
                nostri cinema</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="./programmazione/programmazione.php">Programmazione</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="./offerte/offerte.php">Offerte</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="#chi-siamo">Chi siamo</a>
            </li>

          </ul>


          <span class="navbar-text">

            <div class="btn-areapersonale">
              
              <?php
                if(!isset($_SESSION['nome'])){
                  echo(" <a class='nav-link' href='./area personale/login/login.php'>Area Personale</a> "); 
                }
                else{
                  echo(" <a class='nav-link' href='./area personale/profilo/profilo.php'> Ciao ");
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

  


  <!-- TITOLO -->
  <div class="grid-item">

    <div class="titolo">
      CIAK & AZIONE
    </div>

  </div>


  <!-- CAROSELLO -->
  <div class="grid-item">

    <div class="carosello">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">

          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>

          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>

          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <picture>
              <source media="(min-width: 768px)" srcset="./image/carosello/desktop/i-segreti-di-silente.jpg" class="d-block w-100">
              <source srcset="./image/carosello/mobile/i-segreti-di-silente.jpg" class="d-block w-100">
              <img src="./image/carosello/desktop/i-segreti-di-silente.jpg" alt="" class="d-block w-100">
            </picture>
          </div>

          <div class="carousel-item">
            <picture>
              <source media="(min-width: 768px)" srcset="./image/carosello/desktop/the-northman.jpg" class="d-block w-100">
              <source srcset="./image/carosello/mobile/the-northman.jpg" class="d-block w-100">
              <img src="./image/carosello/desktop/the-northman.jpg" alt="" class="d-block w-100">
            </picture>
          </div>

          <div class="carousel-item">
            <picture>
              <source media="(min-width: 768px)" srcset="./image/carosello/desktop/doctor-strange.jpg" class="d-block w-100">
              <source srcset="./image/carosello/mobile/doctor-strange.jpg" class="d-block w-100">
              <img src="./image/carosello/desktop/doctor-strange.jpg" alt="" class="d-block w-100">
            </picture>
          </div>


        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
    </div>

  </div>




  <!-- OFFERTE -->
  <div class="grid-item">

    <div class="offerte">

      <div class="titolo-offerte">
        Offerte
      </div>

      <div class="btn-offerta1">
        <a href="./offerte/offerte.php#off1">
          <img src="./image/offerte/BigliettoBar.png" alt="" style="max-width:100%; border-radius: 15px;" />
        </a>
      </div>

      <div class="btn-offerta2">
        <a href="./offerte/offerte.php#off2">
          <img src="./image/offerte/CardAzione.png" alt="" style="max-width:100%; border-radius: 15px;" />
        </a>
      </div>

    </div>

  </div>


  <!-- CHI SIAMO -->
  <div class="grid-item">
    <a name="chi-siamo"></a>

    <div class="chi-siamo">

      <div class="titolo-chi-siamo">
        Chi Siamo
      </div>

      <div class="storia">
        Ciak & azione nasce nell'aprile del 2022 dallo sviluppo di un progetto universitario.
        <br>
        Questo nuovo circuito è composto da 3 cinema ognuno composto da 4 sale moderne, ciascuna con
        150 posti, tutte
        con una disposizione ad anfiteatro.
        <br>
        L'obiettivo prefissato dai tre fondatori è quello di porre al centro del
        proprio lavoro lo spettatore a cui offrire la migliore esperienza cinematografica possibile sia per quanto
        riguarda la struttura che l'accoglienza offerta.
      </div>

      <div class="contatti">
        <a href="https://www.instagram.com/ciak.e.azione.cinema/"><img src="./image/icone/ig-48.png" alt=""
            width="40px" height="40px"></a> @ciak.e.azione.cinema
        <br>
        <br>
        <a href="https://www.instagram.com/ciak.e.azione.cinema/"><img src="./image/icone/fb-48.png" alt=""
            width="40px" height="40px"></a> @ciak.e.azione.cinema
        <br>
        <br>
        Ciak & Azione San Lorenzo - Via dello Scalo 64
        <br>
        Ciak & Azione Latina - Via delle Margherite 12
        <br>
        Ciak & Azione Cerveteri - Via delle Viole 22
      </div>

    </div>

  </div>


  <!-- FOOTER -->
  <footer class="footer" style="background-color: rgba(81, 81, 81, 0.705);  text-align: center; font-family: 'Vollkorn', serif; margin-top: 3%;">

    <a href="#top"><img src="./image/logo/logo.png" width="50px" height="50px" alt=""></a>
    <br>
    <span style="color: rgb(220, 220, 217);">Ciak&Azione 2022©Tutti i diritti riservati.</span>
    
  </footer>












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