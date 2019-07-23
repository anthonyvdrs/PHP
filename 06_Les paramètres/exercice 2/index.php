<?php
if (isset($_GET['age'])) 
{
	echo 'Tu as ' . $_GET['age']. 'ans';
}
else 
{
	echo 'Il faut renseigner ton age !';
}
?>
