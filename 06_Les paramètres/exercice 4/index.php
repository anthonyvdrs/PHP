<?php
if (isset($_GET['langage']) AND isset($_GET['serveur'])) 
{
	echo $_GET['langage'] . ' ' . $_GET['serveur'] . ' ';
}
else 
{
	echo 'Il faut renseigner un langage et un serveur! !';
}
?>


