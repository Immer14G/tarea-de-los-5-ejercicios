<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="import" href="insertar.php">
    <title>imagenes </title>
</head>
<body>
    <form action="Imagenes.php" method="post">
        <label for="numero">Ingresa tu numero</label>
        <input type="numero" name="numero">
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
<?php
include_once("Imagenes.php")
?>
