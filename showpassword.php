<?php
session_start();

// Verifica se la password è presente nella sessione
if (isset($_SESSION["generatedPassword"])) {
    $generatedPassword = $_SESSION["generatedPassword"];
    unset($_SESSION["generatedPassword"]);

    // Mostrerà la password
    echo "<p>La tua password generata è: $generatedPassword</p>";
} else {
    // Se non presenta la password ritorna alla pagina principale
    header("Location: ./index.php");
}
?>