<?php
if (isset($_GET['semaine'])) 
{
	echo 'Semaine :'.$_GET['semaine'];
} else 
{
	echo 'Il faut renseigner une semaine!';
}
?>