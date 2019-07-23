<?php
if (isset($_GET['prenom']) AND isset($_GET['nom'])) 
{
	echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else 
{
	echo 'Il faut renseigner un nom et un prénom !';
}
?>
