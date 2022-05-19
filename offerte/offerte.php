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
        Promo
      </div>

      <div class="off_bar1">

        <div class="img">
          <picture>
              <source srcset="../image/offerte/OffertaBar1.png" class="d-block w-100">
              <img src="../image/offerte/OffertaBar1.png" alt="" class="d-block w-100" style="border-radius:15px">
          </picture>
        </div>

        <div class="descrizione">
          Nei nostri cinema Ciak & Azione abbiamo la promozione giusta per te! <br>
          Tutti i mercoledì vieni nei nostri cinema e potrai acquistare un biglietto per qualsiasi film
          più popcorn e bibita grande a soli 8€! <br>
          Inoltre, acquistando due biglietti avrai a disposizione uno sconto del 20% per l'acquisto di un menu grande 
          a scelta. <br>
          Scegli il cinema più vicino a te e non farti scappare l'offerta, ti aspettiamo!
        </div> 

      </div>

      <div class="off_bar2">

        <div class="img">
          <picture>
              <source srcset="../image/offerte/OffertaBar2.png" class="d-block w-100">
              <img src="../image/offerte/OffertaBar2.png" alt="" class="d-block w-100" style="border-radius:15px">
          </picture>
        </div>

        <div class="descrizione">
        Vi piace andare al cinema in coppia? Nessun problema, nei nostri cinema Ciak & Azione abbiamo la promozione giusta per voi! <br>
        Venite il venerdì e potrete acquistare due biglietti per qualsiasi film e due menu grandi a scelta a solo 20€! <br>
        Inoltre, se siete una famiglia e avete almeno un figlio con meno di 14 anni, Ciak & Azione vi consente di avere lo
        SCONTO FAMILY, con il quale potete acquistare un terzo biglietto e un menu medio a soli 6€! <br>
        Non perdete questa occasione, scegliete il cinema più vicino a voi!
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
            <picture>
              <source srcset="../image/offerte/Abbonamento.png" class="d-block w-100">
              <img src="../image/offerte/Abbonamento.png" alt="" class="d-block w-100" style="border-radius:15px">
            </picture>
          </div>

          <div class="descrizione">

            <table style="width: 100%; height: 100%">
              <tr><td style="display:flex; margin:10px;">
                Ti piace venire spesso nei nostri cinema? <br>
                Approfitttane e acquista la nostra card ABBONAMENTO che ti permette di acquistare 8 ingressi e ottenerne 2 in omaggio! <br>
                Se sei interessato iscrivi o effettua il login al sito e prenota immediatamente il tuo abbonamento, che potrai poi ritirare nel cinema più vicino a te quando preferisci! <br>
                Offerta valida fino al 30 giugno 2022.
              </td></tr>

              <tr><td style="display: flex; justify-content:center; margin:10px;">
                <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#modalConfermaAbbonamento" onclick="leggiCookie()">
                  Prenota abbonamento
                </button>

                <div class="modal fade" id="modalConfermaAbbonamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Vuoi confermare la prenotazione dell'abbonamento? </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Seleziona il cinema dove vuoi ritirare l'abbonamento:
                        <br>
                        <select id="sceltaAbbonamento" name="sceltaAbbonamento" required style="width: 100%; height: 100%; background-color: rgba(217, 217, 217, 0.916); border-radius: 15px; text-align: center;">
                          <option value="SanLorenzo">Ciak & Azione San Lorenzo, Roma</option>
                          <option value="Latina">Ciak & Azione Latina</option>
                          <option value="Cerveteri">Ciak & Azione Cerveteri</option>
                        </select>
                        <br>
                        <br>
                        Se confermerai verrà aggiunta la prenotazione al tuo profilo e potrai ritirare l'abbonamento nel cinema da te selezionato quando preferisci!
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="button" class="btn btn-primary" onclick="location.href=' <?php if (!isset($_SESSION['nome'])) { echo('../area personale/login/login.php'); } else { echo ('./php/confermaCard.php?card=Abbonamento'); } ?>'; confermaPrenotazione('Abbonamento');">Conferma</button>
                      </div>
                    </div>
                  </div>
                </div>
              </td></tr>

            </table>

          </div>

        </div>

        <div class="off_bar2">

          <div class="img">
            <picture>
              <source srcset="../image/offerte/CiakCard.png" class="d-block w-100">
              <img src="../image/offerte/CiakCard.png" alt="" class="d-block w-100" style="border-radius:15px">
            </picture>
          </div>


          <div class="descrizione">

            <table style="width: 100%; height: 100%">
              <tr><td style="display:flex; margin:10px;">
              Ciak Card è la prima carta fedeltà al cinema che ti fa risparmiare davvero. <br>
              Che tu sia un genitore, uno studente o solamente appassionato di cinema,
              per te esiste una Ciak Card speciale con la quale puoi avere sconti in alcuni giorni o fasce orarie.
              Con la Ciak Card ottieni punti ogni volta che acquisti un biglietto o un menu, che ti permettono di ottenere fantasitci premi! <br> 
              Cosa aspetti a farla? Iscriviti o effettua il login al sito e prenota subito la tua Ciak Card, che potrai poi ritirare nel cinema più vicino a te quando preferisci!
              </td></tr>

              <tr><td style="display: flex; justify-content:center; margin:10px">
                <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#modalConfermaCiakCard" onclick="leggiCookie()">
                  Prenota Ciak Card
                </button>

                <div class="modal fade" id="modalConfermaCiakCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Vuoi confermare la prenotazione della Ciak Card? </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      Seleziona il cinema dove vuoi ritirare la Ciak Card:
                        <br>
                        <select id="sceltaCiakCard" name="sceltaCiakCard" required style="width: 100%; height: 100%; background-color: rgba(217, 217, 217, 0.916); border-radius: 15px; text-align: center;">
                          <option value="SanLorenzo">Ciak & Azione San Lorenzo, Roma</option>
                          <option value="Latina">Ciak & Azione Latina</option>
                          <option value="Cerveteri">Ciak & Azione Cerveteri</option>
                        </select>
                        <br>
                        <br>
                        Se confermerai verrà aggiunta la prenotazione al tuo profilo e potrai ritirare la Ciak Card nel cinema da te selezionato quando preferisci!
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="button" class="btn btn-primary" onclick="location.href=' <?php if (!isset($_SESSION['nome'])) { echo('../area personale/login/login.php'); } else { echo ('./php/confermaCard.php?card=CiakCard'); } ?>'; confermaPrenotazione('CiakCard'); ">Conferma</button>
                      </div>
                    </div>
                  </div>
                </div>

              </td></tr>

            </table>

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