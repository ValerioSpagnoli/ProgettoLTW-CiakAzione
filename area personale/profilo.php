<?php
  session_start();
?>
<!DOCTYPE html>
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
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../i nostri cinema/inostricinema.php">I
                nostri cinema</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../programmazione/programmazione.php">Programmazione</a>
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
                  echo(" <a class='nav-link' href='./login/login.php'>Area Personale</a> "); 
                }
                else{
                  echo(" <a class='nav-link' href='#'> Ciao ");
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

  <div class="grid-item">
    <div class="profilo">
      <div class="nome" >
        Bentornato Mario!
      </div>
      <div class="foto">
        <img src="../image/profilo/foto_profilo.jpeg" width="150px" height="150px" style="margin:20px">
      </div>
      <div class="dati">
       Nome:   <br>
       Cognome:   <br>
       Data di nascita:   <br>
       Email:   <br>
      </div>
      <div class="azioni">
       Abbonato
      </div>
    </div>
  </div>

  <div class="grid-item">
    <button class="esci" >
    <a href="./logout.php" style="color:black; text-decoration: none;">Logout</a>
    </button>

</body>
</html>