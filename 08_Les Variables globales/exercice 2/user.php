<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
echo 'Nom : ' . $_SESSION['nom'];
echo "<br>";
echo 'Prénom : ' . $_SESSION['prenom'];
echo "<br>";
echo 'Age : ' . $_SESSION['age'];
echo "<br>";
?>
<a href="index.php">Accueil</a>
</body>
</html>