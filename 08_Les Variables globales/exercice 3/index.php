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
     if (isset($_POST['login']) && isset($_POST['password'])) {
        setcookie('login', $_POST['login'], time()+60*60*24*30);
        setcookie('password', $_POST['password'], time()+60*60*24*30);
    }

    if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
        echo "Logged as " . $_COOKIE['login'];
    } else {
        echo 
        "<form action=\"index.php\" method=\"post\">
            Login: <input type=\"text\" name=\"login\" id=\"login\">
            Password: <input type=\"password\" name=\"password\" id=\"password\">
            <input type=\"submit\" value=\"Valider\">
        </form>"
        ;
    }
    ?>
</body>
</html>