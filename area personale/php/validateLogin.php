<?php
if (!(isset($_POST['loginButton']))) {
    header("Location: ../../index.php");
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres") 
    or die('Could not connect: ' . pg_last_error());
}

if ($dbconn) {
    $email = $_POST['email'];
    $query1 = "SELECT * FROM utenti WHERE email= $1";
    $result = pg_query_params($dbconn, $query1, array($email));

    if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC))) {
        header('Location: ../login/login.php?emailErrata=1'); 
    }
    else {
        $password = md5($_POST['password']);
        $query2 = "SELECT * FROM utenti WHERE email = $1 and pswd = $2";
        $data = pg_query_params($dbconn, $query2, array($email, $password));
        
        $array = pg_fetch_array($data, null, PGSQL_ASSOC);

        $name = $array['nome'];
        $surname = $array['cognome'];
        $pswd = $array['pswd'];
        $datanascita=$array['datanascita'];
        $email=$array['email'];

        if ($password != $pswd) {
            pg_free_result($result);
            pg_free_result($data);
            pg_close($dbconn);
            header('Location: ../login/login.php?pswdErrata=1'); 
        }
        else {
            pg_free_result($result);
            pg_free_result($data);
            pg_close($dbconn);
            session_start();
            $_SESSION['nome'] = $name;
            $_SESSION['cognome'] = $surname;
            $_SESSION['datanascita'] = $datanascita;
            $_SESSION['email'] = $email;
            header('Location: ../profilo/profilo.php');
        }
    }
}

?>

