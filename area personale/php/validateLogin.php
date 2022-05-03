<?php
if (!(isset($_POST['loginButton']))) {
    header("Location: ../../index.php");
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres") 
    or die('Could not connect: ' . pg_last_error());
}
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>

        <?php

            if ($dbconn) {
                $email = $_POST['email'];
                $query1 = "SELECT * FROM utenti WHERE email= $1";
                $result = pg_query_params($dbconn, $query1, array($email));

                if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC))) {
                    echo("Non risulti registrato al sito. Clicca <a href=../registrazione/registrazione.php> qui </a> per effettuare la registrazione!");
                }
                else {
                    $password = md5($_POST['password']);
                    $query2 = "SELECT * FROM utenti WHERE email = $1 and pswd = $2";
                    $data = pg_query_params($dbconn, $query2, array($email, $password));
                    
                    $array = pg_fetch_array($data, null, PGSQL_ASSOC);

                    $name = $array['nome'];
                    $surname = $array['cognome'];
                    $pswd = $array['pswd'];

                    if ($password != $pswd) {
                        echo("Password errata. Clicca <a href=../login/login.php> qui </a> per effettuare il login!");
                    }
                    else {
                        session_start();
                        $_SESSION['nome'] = $name;
                        $_SESSION['cognome'] = $surname;
                        header('Location: ../profilo.php');
                    }
                }
            }

        ?> 

    </body>
</html>