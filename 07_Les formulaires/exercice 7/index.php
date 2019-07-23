<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <?php if ((isset($_POST['civilite'])) AND (isset($_POST['prenom'])) AND (isset($_POST['nom'])) AND (isset($_POST['pdf']))) {
            echo $_POST['civilite']." ".$_POST['nom']." ".$_POST['prenom']." "."Votre fichier : ".$_POST['pdf'];
            
    } else {
        echo '<form action="index.php" method="POST">

        <label for="exampleFormControlSelect1" >Civilité</label>
        <select class="form-control" name="civilite" id="exampleFormControlSelect1">
            <option>Mr</option>
            <option>Mme</option>
            <option>Non Binaire</option>
        </select>


        <p><label>Nom : <input type="text" name="nom" /></label></p>
        <p><label>Prénom : <input type="text" name="prenom" /></label></p>

        <label for="exampleFormControlFile1">Ajouter</label>
    <input name="pdf" type="file" class="form-control-file" id="exampleFormControlFile1">

        <p><input type="submit" /></p>
    </form>';
    }
    ?>
</body>

</html>