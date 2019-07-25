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
    $dateDebut = "2016/05/16" ;
    $dateFin = "today";
    
    $dureeSejour = (strtotime($dateFin) - strtotime($dateDebut));
    
    echo number_format($dureeSejour/86400 ,0); 
    ?>
</body>
</html>