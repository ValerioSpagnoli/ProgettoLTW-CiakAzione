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

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style(0-576).css" media="screen and (min-width: 0px)">
  <link rel="stylesheet" href="../css/style(576-768).css" media="screen and (min-width: 576px)">
  <link rel="stylesheet" href="../css/style(768-1200).css" media="screen and (min-width: 768px)">
  <link rel="stylesheet" href="../css/style(1200).css" media="screen and (min-width: 1200px)">

  <title>Ciak & Azione</title>

</head>


<body class="body">

  <!-- NAVBAR -->
  <div class="grid-item-navbar">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(0, 0, 0);">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../index.php" name="top">
          <img src="../../image/logo/logo.png" width="70px" height="70px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(217, 217, 217, 0.916);">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item btn-navbar">
              <a class="nav-link active" aria-current="page" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../../index.php">Home</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../../i nostri cinema/inostricinema.php">I
                nostri cinema</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../../programmazione/programmazione.php">Programmazione</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../../offerte/offerte.php">Offerte</a>
            </li>

            <li class="nav-item btn-navbar">
              <a class="nav-link" style="color: rgb(220, 220, 217); padding-left: 10px;" href="../../index.php#chi-siamo">Chi siamo</a>
            </li>

          </ul>


          <span class="navbar-text">

            <div class="btn-areapersonale">

              <?php
              if (!isset($_SESSION['nome'])) {
                echo (" <a class='nav-link' href='../login/login.php'>Area Personale</a> ");
              } else {
                echo (" <a class='nav-link' href='../logout/logout.php'> Logout </a>");
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

      <div class="nome">
        Bentornato <?php echo ($_SESSION['nome']); ?>
      </div>

      <div class="foto">
        <img src="../../image/profilo/foto_profilo.jpeg" width="150px" height="150px" style="margin:20px">
      </div>

      <div class="dati">
        <div> Nome: <?php echo ($_SESSION['nome']); ?> </div>
        <div> Cognome: <?php echo ($_SESSION['cognome']); ?> </div>
        <div> Data di nascita: <?php echo ($_SESSION['datanascita']); ?> </div>
        <div> Email: <?php echo ($_SESSION['email']); ?> </div>
      </div>

      <div class="azioni">

        <div class="abbonamenti">
          <div class="tit-abbonamenti">
            Abbonamenti
          </div>
          <div class="sezione-abbonamenti">
            Card Famiglia
          </div>
        </div>

        <div class="prenotazioni">
          <div class="tit-prenotazioni">
            Prenotazioni
          </div>
          <div class="sezione-prenotazioni">

            <?php
            $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
              or die('Could not connect: ' . pg_last_error());


            if ($dbconn) {
              $email = $_SESSION['email'];
              $query1 = "SELECT * FROM prenotazioni WHERE email='$email'";


              $result1 = pg_query($query1) or die(pg_last_error());

              while ($line = pg_fetch_array($result1, null, PGSQL_ASSOC)) {
                $id = $line['idprenotazione'];
                $titolo = $line['titolo'];
                $orario = $line['orario'];
                $cinema = $line['cinema'];
                $sala = $line['sala'];
                $postiprenotati = $line['postiprenotati'];

                $prenotazione = "N°: " . $id . "  -  " . $titolo . "  -  Cinema: Ciak&Azione " . $cinema . "  -  Orario: " . $orario . "  -  Sala: " . $sala . "  -  Numero Biglietti: " . $postiprenotati;


                echo ("<div class='riga-prenotazioni'>");

                  echo ("<div class='testo-prenotazione'>");
                    echo ($prenotazione);
                  echo ("</div>");

                  echo ("<div class='btn-prenotazione'>");
                    echo ('<button style="background: none; border:none" data-bs-toggle="modal" data-bs-target="#modalConferma">');
                      echo("<img src='../../image/icone/cestino.png' width='32px' height='32px'>");
                    echo("</button>");
                  echo ("</div>");

                echo ("</div>");

                echo ("<hr>");


                echo('<div class="modal fade" id="modalConferma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">');
                  echo('<div class="modal-dialog">');
                    echo('<div class="modal-content">');
                      echo('<div class="modal-header">');
                        echo('<h5 class="modal-title" id="exampleModalLabel"> Conferma cancellazione </h5>');
                          echo('<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>');
                      echo('</div>');
                      echo('<div class="modal-body">');
                        echo('Sei sicuro/a di voler cancellare la prenotazione?');
                      echo('</div>');
                      echo('<div class="modal-footer">');
                        echo('<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>');
                          echo('<button type="button" class="btn btn-primary" onclick="location.href=');echo("'../php/cancellaPrenotazione.php?id=");echo($id);echo("&cinema=");echo($cinema);echo("&sala=");echo($sala);echo("&orario=");echo($orario);echo("&postiprenotati=");echo($postiprenotati);echo("'");echo('">Conferma</button>');
                      echo('</div>');
                    echo('</div>');
                  echo('</div>');
                echo('</div>');

              }

        

            }
            ?>

            <b> * Presenta il numero della prenotazione al cinema per acquistare i biglietti! </b>

          </div>
        </div>


      </div>

    </div>

  </div>

  <!-- <div class="grid-item">
    <button class="btn-logout" onclick="location.href='../logout/logout.php'">
      Logout
    </button>
  </div> -->



  <!-- FOOTER -->
  <footer class="footer" style="background-color: rgba(81, 81, 81, 0.705);  text-align: center; font-family: 'Vollkorn', serif; margin-top: 3%;">

    <a href="#top"><img src="../../image/logo/logo.png" width="50px" height="50px" alt=""></a>
    <br>
    <span style="color: rgb(220, 220, 217);">Ciak&Azione 2022©Tutti i diritti riservati.</span>

  </footer>












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