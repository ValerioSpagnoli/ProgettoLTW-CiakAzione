
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style(0-576).css" media="screen and (min-width: 0px)">
  <link rel="stylesheet" href="./css/style(576-768).css" media="screen and (min-width: 576px)">
  <link rel="stylesheet" href="./css/style(768-1200).css" media="screen and (min-width: 768px)">
  <link rel="stylesheet" href="./css/style(1200).css" media="screen and (min-width: 1200px)">

  <title>Ciak & Azione</title>
</head>
<body class="body">
    <?php
    session_start();

    // Verifica della presenza di un utente loggato

    if(isset($_SESSION['nome'])) {
        $_SESSION = []; // Reset dell'array di sessione
        session_destroy(); // Chiusura sessione
        header('Location: ../index.php'); // Reindirizzamento
        exit; // Fine script

    } 
    else {
        header('Location: ../index.php'); // Reindirizzamento
        exit; // Fine script
    }
    ?>
</body>
</html>