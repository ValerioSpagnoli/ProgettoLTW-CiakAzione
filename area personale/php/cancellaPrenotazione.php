<?php

session_start();

$dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres")
or die('Could not connect: ' . pg_last_error());

$id = $_GET['id'];

$query1 = "DELETE FROM prenotazioni WHERE idprenotazione=$id";
$result1 = pg_query($query1) or die(pg_last_error());

header('Location: ../profilo/profilo.php');
?>