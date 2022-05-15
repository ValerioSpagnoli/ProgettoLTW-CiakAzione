<?php

session_start();

function check_ext($tipo) {

    switch($tipo) {
        case "image/png": 
            return true;
            break;
        case "image/jpg":
            return true;
            break;
        case "image/jpeg":
            return true;
            break;
        case "image/gif":
            return true;
            break;
        default:
            return false;
            break;
    }
}

function get_ext($tipo) {

    switch($tipo) {
        case "image/png": 
            return ".png";
            break;
        case "image/jpg":
            return ".jpg";
            break;
        case "image/jpeg":
            return ".jpg";
            break;
        case "image/gif":
            return ".gif";
            break;
        default:
            return false;
            break;
    }
}

function get_error($tmp, $type, $size, $max_size) {

    if(!is_uploaded_file($tmp)) {
        // echo "File caricato in modo non corretto<br />";
        header('Location: ../profilo/profilo.php?errore=1');
    }
    if(!check_ext($type)) {
        // echo "Estensione del file non ammesso<br />";
        header('Location: ../profilo/profilo.php?errore=2');
    }
    if($size > $max_size) {
        // echo "Dimensione del file troppo grande<br />";
        header('Location: ../profilo/profilo.php?errore=3');
    }
}

$tmp = $_FILES['image']['tmp_name']; 
$type = $_FILES['image']['type'];
$size = $_FILES['image']['size'];
$max_size = 5242880; //dimensione massima in byte consentita
$folder = "../../image/foto profilo/"; //cartella di destinazione dell'immagine

if(is_uploaded_file($tmp) && check_ext($type) && $size <= $max_size) {

    $email = $_SESSION['email'];

    $ext = get_ext($type); //estensione dell'immagine
    $name = $email; //email
    $name = $name.$ext; //aggiungo al nome appena creato l'estensione
    $name = $folder.$name; //aggiungo il folder di destinazione
    //esempio risultato finale: folder/topolino@gmail.com.gif


    if(move_uploaded_file($tmp,$name)) {
        $dbconn = pg_connect("host=localhost port=5432 dbname=Ciak&Azione user=postgres password=postgres") 
        or die('Could not connect: ' . pg_last_error());
        $query = "UPDATE utenti SET img = '$name' WHERE email= '$email'";
        $result = pg_query($query) or die(pg_last_error());
        header('Location: ../profilo/profilo.php');
    } 
    else {
        header('Location: ../profilo/profilo.php?errore=4');
    }
}
else {
    get_error($tmp, $type, $size, $max_size);
}

?>