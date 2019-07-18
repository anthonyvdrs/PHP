<?php
function res($nbr1, $nbr2){
    if ($nbr1 > $nbr2){
        return "Le premier nombre est plus grand";
    } else if ($nbr1 < $nbr2){
        return "Le premier nombre est plus petit";
    } else{
        return "Les deux nombres sont identiques";
    }
}
echo res(100, 100)
?>