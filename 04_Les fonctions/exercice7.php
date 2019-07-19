<?php
function ex7($age, $genre){
    
    if ($genre === "Homme") {
        echo "Vous êtes un homme";
    } else {
        echo " vous êtes une femme";
    }if ($age >= 18) {
        echo " et vous êtes majeur";
    } else {
        echo " et vous êtes mineur";
    }
}
echo ex7 (20, 'Homme')
?>