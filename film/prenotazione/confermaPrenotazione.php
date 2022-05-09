<?php

    session_start();


    $postiRimanenti = $_COOKIE['postiRimanenti'];
    $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
        or die('Could not connect: ' . pg_last_error());


    if ($dbconn) {
        $cinema = $_SESSION['cinema'];
        $sala = $_SESSION['sala'];
        $orario = $_SESSION['orario'];

        $postiOrario = '';
        if ($orario == '15:00') {
            $postiOrario = 'posti1530';
        } else if ($orario == '17:30') {
            $postiOrario = 'posti1730';
        }
        if ($orario == '20:00') {
            $postiOrario = 'posti2000';
        }
        if ($orario == '22:30') {
            $postiOrario = 'posti2230';
        }

        $query2 = "UPDATE $cinema SET $postiOrario=$postiRimanenti WHERE sala='$sala'";
        $result2 = pg_query($query2) or die(pg_last_error());


        /*
        // definisco mittente e destinatario della mail
        $nome_mittente = "Ciak & Azione";
        $mail_mittente = "ciak.e.azione.cinema@gmail.com";
        $mail_destinatario = $_SESSION['email'];

        // definisco il subject ed il body della mail
        $mail_oggetto = "Prenotazione Biglietto";
        $mail_corpo = "Bella zi";

        // aggiusto un po' le intestazioni della mail
        // E' in questa sezione che deve essere definito il mittente (From)
        // ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
        $mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        // $mail_headers .= "X-Mailer: PHP/" . phpversion();

        if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers)){
            echo "Messaggio inviato con successo a " . $mail_destinatario;
        }
        else{
            echo "Errore. Nessun messaggio inviato.";
        }
        */


        header('Location: ../../area personale/profilo/profilo.php');
    }

?>



