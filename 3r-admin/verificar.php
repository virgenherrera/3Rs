<?php
session_start();
include_once 'php/funciones.php';

if(isset($_POST['usuario']) and !empty($_POST['usuario']) and isset($_POST['pass']) and !empty($_POST['pass'])){
	$consulta = 'SELECT * FROM usuarios WHERE email = "' . $_POST['usuario'] . '"';
	$sesion = consulta_mysql($consulta);
	
	//verificar que el nombre de usuario y el pass esten en la bdd's
	if($_POST['usuario'] == $sesion['email'] and md5($_POST['pass']) == $sesion['pass'] ){
		//verificar la Clase de usuario
		if($sesion['clase_usuario'] == 'superusuario'){
			$_SESSION['3rs_mexico'] = 'superusuario';
			header("Location: panel-de-control.php?usuario=" . $sesion['id_usuario']);
		}
		else{
			$_SESSION['3rs_mexico'] = $_POST['usuario'];
		header('Location: panel-de-control.php?usuario=' . $sesion['id_usuario']);
		}
		
	}
	else{
		header('Location: index.php?error=2');
	}
}
else{
	header('Location: index.php?error=1');
}

?>