<?php
    session_start();


    $postiRimanenti = $_COOKIE['postiRimanenti'];
    $postiSelezionati = $_COOKIE['postiSelezionati'];

    $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
        or die('Could not connect: ' . pg_last_error());


    if ($dbconn) {
        $cinema = $_SESSION['cinema'];
        $sala = $_SESSION['sala'];
        $orario = $_SESSION['orario'];
        $email = $_SESSION['email'];
        $titolo = $_SESSION['titolo'];

        //creazione variabile postiOrario in base all'orario selezionato
        $postiOrario = '';
        if ($orario == '15:00') {$postiOrario = 'posti1500';} 
        else if ($orario == '17:30') {$postiOrario = 'posti1730';}
        else if ($orario == '20:00') {$postiOrario = 'posti2000';}
        else if ($orario == '22:30') {$postiOrario = 'posti2230';}

        //update tabella cinema con i posti rimanenti
        $query2 = "UPDATE $cinema SET $postiOrario=$postiRimanenti WHERE sala='$sala'";
        $result2 = pg_query($query2) or die(pg_last_error());

        //generazione ID prenotazione random
        $id = rand(1,10000);
        $query3 = "SELECT * FROM prenotazioni WHERE 'idPrenotazione'=$id ";
        while(pg_query($query3)){
            $id = rand(1,10000);
            $query3 = "SELECT * FROM prenotazioni WHERE 'idPrenotazione'=$id ";
        }

        //inserimento nella tabella prenotazioni di tutti i dettagli della prenotazione
        $query4 = "INSERT INTO prenotazioni VALUES ($id, '$email', '$titolo', '$orario', '$cinema', '$sala', '$postiSelezionati') ";
        $result4 = pg_query($query4) or die(pg_last_error());


        pg_free_result($result2);
        pg_free_result($result4);
        pg_close($dbconn);
        header('Location: ../../area personale/profilo/profilo.php');
    }

?>



