<?php
session_start();

$dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
    or die('Could not connect: ' . pg_last_error());


if ($dbconn) {

    $carta = $_GET['card'];
    
    if($carta == 'Abbonamento'){
        $cinemaritiro = $_COOKIE['cinema'];
        $email = $_SESSION['email'];
        $nome = $_SESSION['nome'];
        $cognome = $_SESSION['cognome'];
        $card = "Abbonamento";

        $id = rand(1,10000);
        $query1 = "SELECT * FROM prenotazioniCard WHERE 'idPrenotazione'=$id ";
        while(pg_query($query1)){
            $id = rand(1,10000);
            $query1 = "SELECT * FROM prenotazioniCard WHERE 'idPrenotazione'=$id ";
        }

        $query2 = "INSERT INTO prenotazioniCard VALUES ($id, '$email', '$nome', '$cognome', '$card', '$cinemaritiro')";
        $result2 = pg_query($query2) or die(pg_last_error());

    }
    else if($carta == 'CiakCard'){
        $cinemaritiro = $_COOKIE['cinema'];
        $email = $_SESSION['email'];
        $nome = $_SESSION['nome'];
        $cognome = $_SESSION['cognome'];
        $card = "Ciak Card";

        $id = rand(1,10000);
        $query1 = "SELECT * FROM prenotazioniCard WHERE 'idPrenotazione'=$id ";
        while(pg_query($query1)){
            $id = rand(1,10000);
            $query1 = "SELECT * FROM prenotazioniCard WHERE 'idPrenotazione'=$id ";
        }

        $query2 = "INSERT INTO prenotazioniCard VALUES ($id, '$email', '$nome', '$cognome', '$card', '$cinemaritiro')";
        $result2 = pg_query($query2) or die(pg_last_error());
    }

    pg_close($dbconn);
    header('Location: ../../area personale/profilo/profilo.php');
}
