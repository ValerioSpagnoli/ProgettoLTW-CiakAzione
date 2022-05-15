<?php
    session_start();
    $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres") 
        or die('Could not connect: ' . pg_last_error());
    if ($dbconn) {
        $email = $_SESSION['email'];
        $query = "UPDATE utenti SET img='../../image/avatar/donna.jpg' WHERE email= '$email'";
        $result = pg_query($query) or die(pg_last_error());
        header('Location: ../profilo.php');
    }
?>