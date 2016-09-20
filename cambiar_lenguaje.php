<?php
session_start();

if(	isset($_SESSION['idioma'])	&&	!empty($_SESSION['idioma'])	&&
	isset($_GET['lang'])		&&	!empty($_GET['lang'])	)	{
	
	$_SESSION['idioma']	= $_GET['lang'];
}
//redireccionar
header('Location: index.php');
?>