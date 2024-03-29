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
              <a class="nav-link" aria-current="page" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../index.php">Home</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../i nostri cinema/inostricinema.php">I
                nostri cinema</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link active" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../programmazione/programmazione.php">Programmazione</a>
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
                  echo(" <a class='nav-link' href='../area personale/profilo/profilo.php'> Ciao ");
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

  <!-- I NOSTRI CINEMA -->
  <div class="grid-item">

    <div class="inostricinema">
      I NOSTRI CINEMA
    </div>

  </div>

  <!-- LUOGHI -->
  <div class="grid-item">

    <div class="luogo">

      <div class="img">
        <table>
          <tr>
            <td><img src="../image/luoghi/luogo1.jpeg" width="100%" height="auto" style="border-radius: 10px; border: solid 2px black;" alt=""></td>
          </tr>
          <tr>
            <td><div class="via">Ciak & Azione San Lorenzo, Roma</div></td>
          </tr>
        </table>
      </div>

      <div class="btn-container">
        <button class="btn" onclick="salvaCinema('SanLorenzo'); location.href='../programmazione/programmazione.php'">
          Programmazione
        </button>
      </div>

      <div class="descrizione">
        Cerchi un cinema a Roma? Vieni da Ciak & Azione San Lorenzo, in Via dello Scalo 64.
        <br>
        Il cinema, che si trova nel cuore della Capitale, è dotato di 4 sale dotate delle migliori tecnologie per offrirti un'esperienza unica!
        <br>
        Tra i servizi anche un’area relax, area ristoro in cui puoi anche organizzare feste di compleanno.
        Controlla i film in programmazione al multisala di San Lorenzo e scegli il tuo preferito!
      </div>

    </div>
    

  </div>

  <div class="grid-item">

    <div class="luogo">

      <div class="img">
        <table>
          <tr>
            <td><img src="../image/luoghi/luogo2.jpeg" width="100%" height="auto" style="border-radius: 10px; border: solid 2px black;" alt=""></td>
          </tr>
          <tr>
            <td><div class="via">Ciak & Azione Latina</div></td>
          </tr>
        </table>
      </div>

      <div class="btn-container">
        <button class="btn" onclick="salvaCinema('Latina'); location.href='../programmazione/programmazione.php'">
          Programmazione
        </button>
      </div>

      <div class="descrizione">
        Cerchi un cinema a Latina? Vieni da Ciak & Azione Latina, in Via delle Margherite 12.
        <br>
        Il cinema, che si trova al centro di questo splendido capoluogo, è dotato di 4 sale dotate delle migliori tecnologie per offrirti un'esperienza unica!
        <br>
        Tra i servizi anche un’area relax, area ristoro in cui puoi anche organizzare feste di compleanno.
        Controlla i film in programmazione al multisala di Latina e scegli il tuo preferito!
      </div>

    </div>
    

  </div>

  <div class="grid-item">

    <div class="luogo">

      <div class="img">
        <table>
          <tr>
            <td><img src="../image/luoghi/luogo3.jpeg" width="100%" height="auto" style="border-radius: 10px; border: solid 2px black;" alt=""></td>
          </tr>
          <tr>
            <td><div class="via">Ciak & Azione Cerveteri</div></td>
          </tr>
        </table>
      </div>

      <div class="btn-container">
        <button class="btn" onclick="salvaCinema('Cerveteri'); location.href='../programmazione/programmazione.php'">
          Programmazione
        </button>
      </div>

      <div class="descrizione">
        Cerchi un cinema a Cerveteri e dintorni? Vieni da Ciak & Azione Cerveteri, in Via delle Viole 22.
        <br>
        Il cinema, che si trova nella città etrusca, è dotato di 4 sale dotate delle migliori tecnologie per offrirti un'esperienza unica!
        <br>
        Tra i servizi anche un’area relax, area ristoro in cui puoi anche organizzare feste di compleanno.
        Controlla i film in programmazione al multisala di Cerveteri e scegli il tuo preferito!
      </div>

    </div>
    

  </div>



  <!-- FOOTER -->
  <footer class="footer" style="background-color:  rgba(81, 81, 81, 0.705);  text-align: center; font-family: 'Vollkorn', serif; margin-top: 3%;">

    <a href="#top"><img src="../image/logo/logo.png" width="50px" height="50px" alt=""></a>
    <br>
    <span style="color: rgb(220, 220, 217);">Ciak&Azione 2022©Tutti i diritti riservati.</span>

  </footer>





  <script src="./js/script.js"></script>



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