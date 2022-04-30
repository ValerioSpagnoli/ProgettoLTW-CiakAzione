<?php
if (!(isset($_POST['loginButton']))) {
    header("Location: ../../index.html");
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
                    echo("Non risulti registrato al sito. Clicca <a href=../registrazione/registrazione.html> qui </a> per effettuare la registrazione!");
                }
                else {
                    $password = md5($_POST['password']);
                    $query2 = "SELECT * FROM utenti WHERE email = $1 and pswd = $2";
                    $data = pg_query_params($dbconn, $query2, array($email, $password));

                    if (!($line=pg_fetch_array($data, null, PGSQL_ASSOC))) {
                        echo("Password errata. Clicca <a href=../login/login.html> qui </a> per effettuare il login!");
                    }
                    else {
                        echo("Login avvenuto con successo. Clicca <a href=../../index.html> qui </a> per tornare alla home!");
                    }
                }
            }

        ?> 

    </body>
</html>