
  <?php
  session_start();

  // Verifica della presenza di un utente loggato

  if (isset($_SESSION['nome'])) {
    $_SESSION = []; // Reset dell'array di sessione
    session_destroy(); // Chiusura sessione
    header('Location: ../../index.php'); // Reindirizzamento
    exit; // Fine script

  } else {
    header('Location: ../../index.php'); // Reindirizzamento
    exit; // Fine script
  }
  ?>
