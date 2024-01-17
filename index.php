<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Generatore Di Password</title>
</head>
<body>

<h1>Generatore Di Password</h1>

<form action="index.php" method="get">
    <label for="passwordLength">La Lunghezza Della Password Che Desideri : </label>
    <input type="number" name="passwordLength" id="passwordLength" min="1" required
        value="<?php echo isset($_SESSION['passwordLength']) ? $_SESSION['passwordLength'] : ''; ?>">
    <button type="subtim">Genera La Tua Password</button>
</form>

<!--qua inizierò a inserire la logica per generare la password!-->
    <?php

    session_start();

    include 'functions.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        if (isset($_GET["passwordLength"])) {
            $_SESSION["passwordLength"] = (int)$_GET["passwordLength"];

            $password = generateRandomPassword($_SESSION["passwordLength"]);

            //stampo la password generata

            echo "<p> La tua password generata è: $password<p>";
        }
    };

    ?>

</body>
</html>