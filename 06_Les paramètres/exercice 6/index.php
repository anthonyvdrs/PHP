<?php
if (isset($_GET['batiment']) AND isset($_GET['salle'])) 
{
	echo 'batiment n°'.$_GET['batiment'] . ' ' .'salle n°'. $_GET['salle'] . ' ';
}
else 
{
	echo 'Il faut renseigner la salle et le batiment! !';
}
?>