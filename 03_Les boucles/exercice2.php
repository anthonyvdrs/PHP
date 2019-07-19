<?php
$nbr1 = 0;
$nbr2 = rand(1, 100);


while ($nbr1 <= 20){
    $res = $nbr1 * $nbr2;
    var_dump ($res);
    $nbr1++;
}
?>