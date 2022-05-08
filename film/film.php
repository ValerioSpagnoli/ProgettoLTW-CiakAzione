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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
          <img src="../image/logo/logo.png" width="70px" height="70px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(217, 217, 217, 0.916);">
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
              if (!isset($_SESSION['nome'])) {
                echo (" <a class='nav-link' href='../area personale/login/login.php'>Area Personale</a> ");
              } else {
                echo (" <a class='nav-link' href='../area personale/profilo.php'> Ciao ");
                echo ($_SESSION['nome']);
                echo ("! </a> ");
              }
              ?>

            </div>

          </span>

        </div>
      </div>
    </nav>

  </div>


  <?php
  // if (!(isset($_POST['loginButton']))) {
  //   header("Location: ../../index.php");
  // } else {
  //   $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
  //     or die('Could not connect: ' . pg_last_error());
  // }


  $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
    or die('Could not connect: ' . pg_last_error());

  if ($dbconn) {
    $titolo = $_GET['titolo'];
    $query1 = "SELECT * FROM film WHERE titolo='$titolo'";
    $result = pg_query($query1) or die(pg_last_error());
    $array = pg_fetch_array($result, null, PGSQL_ASSOC);

    $_SESSION['titolo'] = $array['titolo'];
    $_SESSION['regista'] = $array['regista'];
    $_SESSION['genere'] = $array['genere'];
    $_SESSION['anno'] = $array['anno'];
    $_SESSION['paese'] = $array['paese'];
    $_SESSION['durata'] = $array['durata'];
    $_SESSION['datauscita'] = $array['datauscita'];
    $_SESSION['distribuzione'] = $array['distribuzione'];
    $_SESSION['trama'] = $array['trama'];
    $_SESSION['locandina'] = $array['locandina'];
    $_SESSION['trailer'] = $array['trailer'];
    $_SESSION['disponibile'] = $array['disponibile'];
  }

  ?>








  <!-- SCHEDA FILM -->
  <div class="grid-item">

    <!-- sezione scheda-film -->
    <div class="schedafilm">
      <a v-bind:name="x.riferimento"></a>
      <div class="tit-film">
        <?php echo ($_SESSION['titolo']) ?>
      </div>

      <div class="locandine">
        <div class="rating">
          <input type="radio" name="rating" value="5" id="5">
          <label for="5">☆</label>
          <input type="radio" name="rating" value="4" id="4">
          <label for="4">☆</label>
          <input type="radio" name="rating" value="3" id="3">
          <label for="3">☆</label>
          <input type="radio" name="rating" value="2" id="2">
          <label for="2">☆</label>
          <input type="radio" name="rating" value="1" id="1">
          <label for="1">☆</label>
        </div>
        <div class="img">
          <img src="  <?php echo ($_SESSION['locandina']) ?> " alt="" width="100%" height="100%">
        </div>
      </div>

      <div class="descrizione">
        Regista: <?php echo ($_SESSION['regista']) ?> <br>
        Genere: <?php echo ($_SESSION['genere']) ?> <br>
        Anno: <?php echo ($_SESSION['anno']) ?><br>
        Paese: <?php echo ($_SESSION['paese']) ?><br>
        Durata: <?php echo ($_SESSION['durata']) ?><br>
        Data di uscita: <?php echo ($_SESSION['datauscita']) ?><br>
        Distribuzione: <?php echo ($_SESSION['distribuzione']) ?><br><br>
        Trama: <?php echo ($_SESSION['trama']) ?>
      </div>

      <!-- sezione orario -->
      <div class="orario">

        <div class="titolo-orario">
          orario
        </div>

        <div class="sceltacinema">
          <select id="scelta" required style="width: 100%; height: 100%; background-color: rgba(217, 217, 217, 0.916); border-radius: 15px; text-align: center;">

            <?php 
              if($_SESSION['disponibile'] == 'sanlorenzo-cerveteri-latina'){
                echo("<option value='SanLorenzo'>Ciak & Azione San Lorenzo, Roma</option>");
                echo("<option value='Latina'>Ciak & Azione Latina</option>");
                echo("<option value='Cerveteri'>Ciak & Azione Cerveteri</option>");
              }
              else if($_SESSION['disponibile'] == 'sanlorenzo-cerveteri'){
                echo("<option value='SanLorenzo'>Ciak & Azione San Lorenzo, Roma</option>");
                echo("<option value='Latina' disabled>Ciak & Azione Latina</option>");
                echo("<option value='Cerveteri'>Ciak & Azione Cerveteri</option>");
              }
              else if($_SESSION['disponibile'] == 'sanlorenzo-latina'){
                echo("<option value='SanLorenzo'>Ciak & Azione San Lorenzo, Roma</option>");
                echo("<option value='Latina'>Ciak & Azione Latina</option>");
                echo("<option value='Cerveteri' disabled>Ciak & Azione Cerveteri</option>");
              }
              else if($_SESSION['disponibile'] == 'cerveteri-latina'){
                echo("<option value='SanLorenzo' disabled>Ciak & Azione San Lorenzo, Roma</option>");
                echo("<option value='Latina'>Ciak & Azione Latina</option>");
                echo("<option value='Cerveteri'>Ciak & Azione Cerveteri</option>");
              }
              else if($_SESSION['disponibile'] == 'sanlorenzo'){
                echo("<option value='SanLorenzo'>Ciak & Azione San Lorenzo, Roma</option>");
                echo("<option value='Latina' disabled>Ciak & Azione Latina</option>");
                echo("<option value='Cerveteri' disabled>Ciak & Azione Cerveteri</option>");
              }
              else if($_SESSION['disponibile'] == 'cerveteri'){
                echo("<option value='SanLorenzo' disabled>Ciak & Azione San Lorenzo, Roma</option>");
                echo("<option value='Latina' disabled>Ciak & Azione Latina</option>");
                echo("<option value='Cerveteri'>Ciak & Azione Cerveteri</option>");
              }
              else if($_SESSION['disponibile'] == 'latina'){
                echo("<option value='SanLorenzo' disabled>Ciak & Azione San Lorenzo, Roma</option>");
                echo("<option value='Latina'>Ciak & Azione Latina</option>");
                echo("<option value='Cerveteri' disabled>Ciak & Azione Cerveteri</option>");
              }

            ?>


          </select>
        </div>

        <!-- bottoni-orario -->
        <div class="orario1">
          <button class="btn" type="submit">
            17:00
          </button>
        </div>

        <div class="orario2">
          <button class="btn" type="submit">
            18:00
          </button>
        </div>

        <div class="orario3">
          <button class="btn" type="submit">
            20:00
          </button>
        </div>

        <div class="orario4">
          <button class="btn" type="submit">
            22:00
          </button>
        </div>
        <!-- bottoni-orario -->

      </div>
      <!-- sezione orario -->

    </div>
    <!-- sezione scheda-film -->

  </div>

  <!-- TRAILER -->
  <div class="grid-item">
    <!--560 315-->
    <div class="trailer">
      <iframe width="100%" height="100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="  <?php echo ($_SESSION['trailer']) ?> "></iframe>
    </div>
  </div>


  <!-- FOOTER -->
  <footer class="footer" style="background-color: rgba(81, 81, 81, 0.705);  text-align: center; font-family: 'Vollkorn', serif; margin-top: 3%;">

    <a href="#top"><img src="../image/logo/logo.png" width="50px" height="50px" alt=""></a>
    <br>
    <span style="color: rgb(220, 220, 217);">Ciak&Azione 2022©Tutti i diritti riservati.</span>

  </footer>






  <script src="./js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->

</body>

</html>