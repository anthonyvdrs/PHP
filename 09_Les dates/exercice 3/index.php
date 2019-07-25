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
    $date1 = date('Y-m-d'); // Date du jour
    setlocale (LC_TIME, 'fr_FR.utf8','fra');
    echo strftime("%A %d %B %G", strtotime($date1));
    ?>
</body>
</html>