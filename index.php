<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    

</body>
</html>