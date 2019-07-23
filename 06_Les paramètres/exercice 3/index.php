<?php
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) 
{
	echo $_GET['dateDebut'] . ' ' . $_GET['dateFin'] . ' !';
}
else 
{
	echo 'Il faut renseigner une date de début et de fin !';
}
?>