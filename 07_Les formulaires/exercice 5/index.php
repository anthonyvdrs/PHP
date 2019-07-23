<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">

        <label for="exampleFormControlSelect1" name="civilite">Civilité</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Mr</option>
            <option>Mme</option>
            <option>Non Binaire</option>
        </select>


        <p><label>Nom : <input type="text" name="nom" /></label></p>
        <p><label>Prénom : <input type="text" name="prenom" /></label></p>

        <p><input type="submit" /></p>
    </form>
</body>

</html>