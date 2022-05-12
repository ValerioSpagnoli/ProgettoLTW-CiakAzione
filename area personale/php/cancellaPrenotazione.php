<?php

session_start();

$dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
or die('Could not connect: ' . pg_last_error());

$id = $_GET['id'];
$cinema = $_GET['cinema'];
$sala = $_GET['sala'];
$orario = $_GET['orario'];
$postiprenotati = $_GET['postiprenotati'];

$query1 = "DELETE FROM prenotazioni WHERE idprenotazione=$id";
$result1 = pg_query($query1) or die(pg_last_error());


$postiOrario = '';
if($orario == '15:00'){
    $postiOrario = 'posti1500';
}
else if($orario == '17:30'){
    $postiOrario = 'posti1730';
}
else if($orario == '20:00'){
    $postiOrario = 'posti2000';
}
else if($orario == '22:30'){
    $postiOrario = 'posti2230';
}


$query2 = "SELECT * FROM $cinema WHERE sala='$sala'";
$result2 = pg_query($query2) or die(pg_last_error());
$array = pg_fetch_array($result2, null, PGSQL_ASSOC);

$postiDisponibili = 0;
if($orario == '15:00'){
    $postiDisponibili = $array['posti1500'];
}
else if($orario == '17:30'){
    $postiDisponibili = $array['posti1730'];
}
else if($orario == '20:00'){
    $postiDisponibili = $array['posti2000'];
}
else if($orario == '22:30'){
    $postiDisponibili = $array['posti2230'];
}


$postiIncrementati = $postiDisponibili+$postiprenotati;


$query3 = "UPDATE $cinema SET $postiOrario = $postiIncrementati WHERE sala='$sala'";
$result3 = pg_query($query3) or die(pg_last_error());

pg_free_result($result1);
pg_free_result($result2);
pg_free_result($result3);
pg_close($dbconn);

header('Location: ../profilo/profilo.php');
?>