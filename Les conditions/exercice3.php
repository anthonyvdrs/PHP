<?php
    $age = readline("quelle est votre age?");
    $genre = readline("êtes-vous un homme ou une femme?");

 if ($age >= 18) {
     if ( $genre === "homme" ){
        echo "Vous êtes un $genre et vous êtes majeur";
     } else {
         echo "Vous êtes une $genre et vous êtes majeur";
     }
     
 } else {
    if ( $genre === "homme" ){
        echo "Vous êtes un $genre et vous êtes mineur";
     } else {
         echo "Vous êtes une $genre et vous êtes mineur";
     }
 }
?>
