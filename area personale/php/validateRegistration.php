<?php
if (!(isset($_POST['registrationButton']))) {
    header("Location: ../../index.php");
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres") 
    or die('Could not connect: ' . pg_last_error());
};
?>


<!DOCTYPE html>
<html lang="en">
<head></head>

<body>

    <?php

        if($dbconn){
            $email = $_POST['email'];
            $query1 = "SELECT * FROM utenti WHERE email = $1";
            $result = pg_query_params($dbconn, $query1, array($email));

            if ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                echo("Sei già registrato con questa email. Clicca <a href=../login/login.php> qui </a> per effettuare il login!");
            }

            else {
                $nome = $_POST['nome'];
                $cognome = $_POST['cognome'];
                $datanascita = $_POST['datanascita'];
                $password = md5($_POST['password']);

                $query2 = "INSERT INTO utenti VALUES ($1,$2,$3,$4,$5)";

                $data = pg_query_params($dbconn, $query2, array($nome, $cognome, $datanascita, $email, $password));

                if ($data) {
                    alert("Registrazione effettuata con successo!");
                    header('Location: ../login/login.php');
                    // echo("Registrazione completata. Clicca <a href=../login/login.php> qui </a> per effettuare il login!");
                }
                else{
                    echo "Errore in fase di registrazione. Clicca <a href=../../index.php> qui </a> per tornare alla home.";
                }
            } 
        }

    ?>

    
</body>

</html>