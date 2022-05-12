<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../js/script.js"></script>

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

    <?php
    $_SESSION['orario'] = $_GET['orario'];
    if ($_SESSION['orario'] == '15:00') {
        setcookie('postiDisponibili', $_SESSION['posti1500'], strtotime("+1 day"));
    } else if ($_SESSION['orario'] == '17:30') {
        setcookie("postiDisponibili", $_SESSION['posti1730'], strtotime("+1 day"));
    } else if ($_SESSION['orario'] == '20:00') {
        setcookie("postiDisponibili", $_SESSION['posti2000'], strtotime("+1 day"));
    } else if ($_SESSION['orario'] == '22:30') {
        setcookie("postiDisponibili", $_SESSION['posti2230'], strtotime("+1 day"));
    }

    ?>

    <!-- SCHEDA PRENOTAZIONE -->
    <div class="grid-item">

        <!-- sezione scheda-prenotazione -->
        <div class="scheda-prenotazione">

            <div class="tit-prenotazione">
                Dettagli Prenotazione
            </div>



            <div class="img-pren">
                <img src="  <?php echo ('../');echo ($_SESSION['locandina']) ?> " alt="" width="239px" height="358px">
            </div>


            <!-- sezione descrizione-prenotazione -->
            <div class="descrizione-prenotazione">

                <table>
                    <tr>
                        <td> Film: <?php echo ($_SESSION['titolo']) ?> </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td> Cinema: <?php echo ($_SESSION['cinema']) ?> </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td> Sala: <?php echo ($_SESSION['sala']) ?> </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td> Orario: <?php echo ($_SESSION['orario']) ?> </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>
                            Numero Biglietti:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </td>
                        <td>

                            <select id="sceltaBiglietti" style="width: 100%; height: 100%; background-color: rgba(217, 217, 217, 0.916); border-radius: 5px; text-align: center;">
                                <?php
                                if ($_SESSION['orario'] == '15:00') {
                                    if ($_SESSION['posti1500'] > 3) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3'>3</option>");
                                        echo ("<option value='4'>4</option>");
                                    } else if ($_SESSION['posti1500'] > 2) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3'>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    } else if ($_SESSION['posti1500'] > 1) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3' disabled>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    } else if ($_SESSION['posti1500'] > 0) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2' disabled>2</option>");
                                        echo ("<option value='3' disabled>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    }
                                } else if ($_SESSION['orario'] == '17:30') {
                                    if ($_SESSION['posti1730'] > 3) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3'>3</option>");
                                        echo ("<option value='4'>4</option>");
                                    } else if ($_SESSION['posti1730'] > 2) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3'>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    } else if ($_SESSION['posti1730'] > 1) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3' disabled>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    } else if ($_SESSION['posti1730'] > 0) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2' disabled>2</option>");
                                        echo ("<option value='3' disabled>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    }
                                } else if ($_SESSION['orario'] == '20:00') {
                                    if ($_SESSION['posti2000'] > 3) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3'>3</option>");
                                        echo ("<option value='4'>4</option>");
                                    } else if ($_SESSION['posti2000'] > 2) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3'>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    } else if ($_SESSION['posti2000'] > 1) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3' disabled>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    } else if ($_SESSION['posti2000'] > 0) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2' disabled>2</option>");
                                        echo ("<option value='3' disabled>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    }
                                } else if ($_SESSION['orario'] == '22:30') {
                                    if ($_SESSION['posti2230'] > 3) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3'>3</option>");
                                        echo ("<option value='4'>4</option>");
                                    } else if ($_SESSION['posti2230'] > 2) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3'>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    } else if ($_SESSION['posti2230'] > 1) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2'>2</option>");
                                        echo ("<option value='3' disabled>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    } else if ($_SESSION['posti2230'] > 0) {
                                        echo ("<option value='1' selected>1</option>");
                                        echo ("<option value='2' disabled>2</option>");
                                        echo ("<option value='3' disabled>3</option>");
                                        echo ("<option value='4' disabled>4</option>");
                                    }
                                }

                                ?>
                            </select>

                        </td>
                    </tr>
                </table>

            </div>
            <!-- sezione descrizione-prenotazione -->

            <!-- sezione bottoni -->
            <div class="btn-prenotazione">

                <table>
                    <tr>
                        <td>
                            <button class="btn-annulla" onClick="history.go(-1);return true;">
                                Annulla
                            </button>
                        </td>
                        <td>
                            <button class="btn-conferma" data-bs-toggle="modal" data-bs-target="#modalConferma" onclick="confermaPrenotazione();">
                                Conferma
                            </button>


                            <div class="modal fade" id="modalConferma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Vuoi confermare la prenotazione? </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Se confermerai verrà aggiunta la prenotazione al tuo profilo.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                            <button type="button" class="btn btn-primary" onclick="location.href='./confermaPrenotazione.php'">Conferma</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>

                </table>




            </div>
            <!-- sezione bottoni -->

        </div>
        <!-- sezione scheda-prenotazione -->

    </div>





    <!-- FOOTER -->
    <!-- <footer class="footer" style="background-color: rgba(81, 81, 81, 0.705);  text-align: center; font-family: 'Vollkorn', serif; margin-top: 3%;">

        <a href="#top"><img src="../../image/logo/logo.png" width="50px" height="50px" alt=""></a>
        <br>
        <span style="color: rgb(220, 220, 217);">Ciak&Azione 2022©Tutti i diritti riservati.</span>

    </footer> -->







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