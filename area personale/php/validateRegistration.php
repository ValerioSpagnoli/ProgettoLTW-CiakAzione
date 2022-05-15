<?php
if (!(isset($_POST['registrationButton']))) {
    header("Location: ../../index.php");
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres") 
    or die('Could not connect: ' . pg_last_error());
};

if($dbconn){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $datanascita = $_POST['datanascita'];
    $password = md5($_POST['password']);
    $confermapassword= md5($_POST['confermapassword']);
    $query1 = "SELECT * FROM utenti WHERE email = $1";
    $result = pg_query_params($dbconn, $query1, array($email));

    if ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        header('Location: ../registrazione/registrazione.php?errore=1');
    }
    else if($_POST['password']!=$_POST['confermapassword']){
        header('Location: ../registrazione/registrazione.php?errore=2');
    }
    else {
        $query2 = "INSERT INTO utenti VALUES ($1,$2,$3,$4,$5,'../../image/avatar/default.jpeg')";
        $data = pg_query_params($dbconn, $query2, array($nome, $cognome, $datanascita, $email, $password));

        if ($data) {
            pg_free_result($result);
            pg_free_result($data);
            pg_close($dbconn);
            header('Location: ../login/login.php');
        }
        else{
            pg_free_result($result);
            pg_free_result($data);
            pg_close($dbconn);
            header('Location: ../../index.php');
        }
    } 

}

?>


