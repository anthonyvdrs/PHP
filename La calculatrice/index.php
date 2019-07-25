<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

</head>

<body>

    <form action="#" method="post">
        <input type="text" name="nbr1">

        <select class="form-control" id="exampleFormControlSelect1">
            <option name="envoi" value="+">+</option>
            <option name="envoi" value="-">-</option>
            <option name="envoi" value="*">*</option>
            <option name="envoi" value="/">/</option>
        </select>

        <input type="text" name="nbr2">

        <button type="submit">Résultat</button>
        
    </form>



    <?php
        function calc() {
            $signe = $_POST['envoi'];
            if ($signe == "+") {
                echo $_POST['nbr1'] +  $_POST['nbr2'];
            } else if ($signe == "-") {
                echo $_POST['nbr1'] - $_POST['nbr2'];
            } else if ($signe == "/") {
                echo $_POST['nbr1'] /  $_POST['nbr2'];
            } else {
                echo $_POST['nbr1'] *  $_POST['nbr2'];
            }
        }
        calc();
    ?>
</body>

</html>