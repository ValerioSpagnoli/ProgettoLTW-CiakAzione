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
        <center>
        <?php
          if(isset($_GET['errore'])){
            $errore = $_GET['errore'];
            if($errore == 1){
              echo('<div style="display:flex; justify-content:center; color: red; font-size: 20px;"> File caricato in modo non corretto. </div>');
            }
            else if($errore == 2){
              echo('<div style="display:flex; justify-content:center; color: red; font-size: 20px;"> Estensione del file non ammessa. </div>');
            }
            else if($errore == 3){
              echo('<div style="display:flex; justify-content:center; color: red; font-size: 20px;"> Dimensione del file troppo grande. </div>');
            }
            else if($errore == 4){
              echo('<div style="display:flex; justify-content:center; color: red; font-size: 20px;"> Non è stato possibile caricare la foto. </div>');
            }
          }

        ?>
      
        <br>

        <?php 
          if(isset($_GET['errore'])){
            $img = "../../image/avatar/default.jpeg";
            echo("<img src='$img' width='150px' height='150px' style='margin:20px'>");
          }
          else{
            $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres") 
            or die('Could not connect: ' . pg_last_error());
            if ($dbconn) {
              $email = $_SESSION['email'];
              $query1 = "SELECT * FROM utenti WHERE email= $1";
              $result = pg_query_params($dbconn, $query1, array($email));
              $array = pg_fetch_array($result, null, PGSQL_ASSOC);
              $img=$array['img'];
              echo("<img src='$img' width='150px' height='auto' style='margin:20px'>");
            }
          }
        ?>

        <footer class="footer">

          <button class="btn btn-avatar" data-bs-toggle="modal" data-bs-target="#modalAvatar" >
              Scegli avatar
          </button>

          <div class="modal fade" id="modalAvatar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" >
                <div class="modal-content" >
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Vuoi cambiare il tuo avatar del profilo? </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <center>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: none; border:none" 
                    onclick="cambiaAvatar('../../image/avatar/donna.jpg')">
                      <img src="../../image/avatar/donna.jpg" width="150px" height="150px" >
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: none; border:none"
                    onclick="cambiaAvatar('../../image/avatar/uomo.jpg')">
                      <img src="../../image/avatar/uomo.jpg" width="150px" height="150px" style="margin:20px">
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: none; border:none"
                    onclick="cambiaAvatar('../../image/avatar/default.jpeg')">
                      <img src="../../image/avatar/default.jpeg" width="150px" height="150px" style="margin:20px">
                    </button>
                    </center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                  </div>
                </div>
            </div>
          </div>

          <button class="btn btn-foto" data-bs-toggle="modal" data-bs-target="#modalFoto"> 
            Scegli foto
          </button>

          <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> Scegli la tua foto profilo! </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../php/caricaFoto.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">  
                  <input type="file" value="scegli immagine" name="image"/>
                  <br>
                  <br>
                  Le estensioni ammesse sono .jpg .jpeg .png .gif
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                  <button type="submit" class="btn btn-primary">Conferma</button>
                </div>
                </form>
              </div>
            </div>
          </div>

        </footer>
        </center>

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
          <?php
            $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
              or die('Could not connect: ' . pg_last_error());


            if ($dbconn) {
              $email = $_SESSION['email'];
              $query1 = "SELECT * FROM prenotazioniCard WHERE email='$email'";


              $result1 = pg_query($query1) or die(pg_last_error());

              while ($line = pg_fetch_array($result1, null, PGSQL_ASSOC)) {
                $id = $line['idprenotazione'];
                $nome = $line['nome'];
                $cognome = $line['cognome'];
                $cinema = $line['cinemaritiro'];
                $card = $line['card'];

                $prenotazione = "N°: " . $id . "  -  " . $card . "  -  Intestatario: " . $nome . " " . $cognome . "  -  Cinema selezionato per il ritiro: Ciak & Azione " . $cinema;

                echo ("<div class='riga-prenotazioni'>");

                  echo ("<div class='testo-prenotazione'>");
                    echo ($prenotazione);
                  echo ("</div>");

                  echo ("<div class='btn-prenotazione'>");
                    echo ('<button style="background: none; border:none" data-bs-toggle="modal" data-bs-target="#modalConferma1">');
                      echo("<img src='../../image/icone/cestino.png' width='32px' height='32px'>");
                    echo("</button>");
                  echo ("</div>");

                echo ("</div>");

                echo ("<hr>");

                echo('<div class="modal fade" id="modalConferma1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">');
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
                          echo('<button type="button" class="btn btn-primary" onclick="location.href=');echo("'../php/cancellaPrenotazioneCard.php?id=");echo($id);echo("'");echo('">Conferma</button>');
                      echo('</div>');
                    echo('</div>');
                  echo('</div>');
                echo('</div>');
              }
            }
            ?>
            <b> * Presenta il numero della prenotazione al cinema selezionato per acquistare la tua card! </b>
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
                    echo ('<button style="background: none; border:none" data-bs-toggle="modal" data-bs-target="#modalConferma2">');
                      echo("<img src='../../image/icone/cestino.png' width='32px' height='32px'>");
                    echo("</button>");
                  echo ("</div>");

                echo ("</div>");

                echo ("<hr>");


                echo('<div class="modal fade" id="modalConferma2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">');
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


  <!-- FOOTER -->
  <footer class="footer" style="background-color: rgba(81, 81, 81, 0.705);  text-align: center; font-family: 'Vollkorn', serif; margin-top: 3%;">

    <a href="#top"><img src="../../image/logo/logo.png" width="50px" height="50px" alt=""></a>
    <br>
    <span style="color: rgb(220, 220, 217);">Ciak&Azione 2022©Tutti i diritti riservati.</span>

  </footer>










  <script src="../js/script.js"></script>

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