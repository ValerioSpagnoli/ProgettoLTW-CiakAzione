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
        <a class="navbar-brand" href="../index.php" name="top">
          <img src="../image/logo/logo.png" width="70px" height="70px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(217, 217, 217, 0.916);">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item btn-navbar">
              <a class="nav-link active" aria-current="page" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../index.php">Home</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../i nostri cinema/inostricinema.php">I nostri cinema</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../programmazione/programmazione.php">Programmazione</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="#">Offerte</a>
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


  <!-- TITOLO -->
  <div class="grid-item">

    <div class="titolo">
      CARD E PROMO
    </div>

  </div>

  <!--OFFERTE-->
  <div class="grid-item">
    <a name="#off1"></a>
    <div class="offerta">
      <div class="titolo-off">
        Biglietto+Bar
      </div>
      <div class="off_bar1">
        <div class="img">
          <img src="../image/offerte/offerta1.jpeg" alt="" style="width: 380px; height: 210px; border-radius: 15px;">
        </div>
        <div class="descrizione">
          Nei nostri cinema Ciak & Azione abbiamo la promozione giusta per ogni cliente! 
          <br>
          Ti piace mangiare mentre guardi i nostri film? 
          Acquistando due biglietti ingresso, avrai a disposizione uno sconto del 20% per l'acquisto di pop corn e bibite 
          da consumarsi al nostro bar, all'ingresso del cinema.
        </div>
      </div>
      <div class="off_bar2">
        <div class="img">
          <img src="../image/offerte/offerta1.jpeg" alt="" style="width: 380px; height: 210px;border-radius: 15px;">
        </div>
        <div class="descrizione">
          Nei nostri cinema Ciak & Azione abbiamo la promozione giusta per ogni cliente! 
          <br>
          Ti piace mangiare mentre guardi i nostri film? 
          Acquistando due biglietti ingresso, avrai a disposizione uno sconto del 20% per l'acquisto di pop corn e bibite 
          da consumarsi al nostro bar, all'ingresso del cinema.
        </div>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <a name="off2"></a>
      <div class="offerta">
        <div class="titolo-off">
          Card
        </div>
        <div class="off_bar1">
          <div class="img">
            <img src="../image/offerte/offerta2.jpg" alt="" style="width: 380px; height: 210px; border-radius: 15px;">
          </div>
          <div class="descrizione">
            Nei nostri cinema Ciak & Azione abbiamo la promozione giusta per ogni cliente! 
            <br>
            Ti piace mangiare mentre guardi i nostri film? 
            Acquistando due biglietti ingresso, avrai a disposizione uno sconto del 20% per l'acquisto di pop corn e bibite 
            da consumarsi al nostro bar, all'ingresso del cinema.
          </div>
        </div>
        <div class="off_bar2">
          <div class="img">
            <img src="../image/offerte/offerta2.jpg" alt="" style="width: 380px; height: 210px; border-radius: 15px;">
          </div>
          <div class="descrizione">
            Nei nostri cinema Ciak & Azione abbiamo la promozione giusta per ogni cliente! 
            <br>
            Ti piace mangiare mentre guardi i nostri film? 
            Acquistando due biglietti ingresso, avrai a disposizione uno sconto del 20% per l'acquisto di pop corn e bibite 
            da consumarsi al nostro bar, all'ingresso del cinema.
          </div>
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