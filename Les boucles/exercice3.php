<?php
$nbr1 = 100;
$nbr2 = rand(1, 100);


while ($nbr1 >= 10){
    $res = $nbr1 * $nbr2;
    var_dump ($res);
    $nbr1--;
}
?>