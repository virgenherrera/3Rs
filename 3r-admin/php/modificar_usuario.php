<?php
//en este script se procesan todas las adiciones de idiomas en las secciones

function consulta_mysql($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include '../../php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
	
	//convertir MYSQL query en array
	$valor_regresado = mysql_fetch_array($registro) or die("error al convertir consulta MYSQL en array");
	//valor que regresa esta funcion
	return $valor_regresado;
}//<--fin consulta_mysql()

function insertar_mysql($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include '../../php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
}

if(	isset($_POST['id_usuario'])				&& 		!empty($_POST['id_usuario'])			&&
	isset($_POST['nombre_usuario'])			&& 		!empty($_POST['nombre_usuario'])		&&
	isset($_POST['apellido_usuario'])		&& 		!empty($_POST['apellido_usuario'])	&&
	isset($_POST['email'])					&& 		!empty($_POST['email'])				&&
	isset($_POST['clase_usuario'])			&& 		!empty($_POST['clase_usuario'])		&&
	isset($_POST['clase_usuario2'])			&& 		!empty($_POST['clase_usuario2'])	)	{
	
	//regenerar contraseña si es que fue seleccionado
	if(isset($_POST['regenerar'])				and 		!empty($_POST['regenerar']) and $_POST['regenerar'] == 'si'){
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$cad = "";
		$pass = "";
		for($i=0;$i<12;$i++) {
			$pass .= substr($str,rand(0,62),1);
		}
		$passmd5 = md5($pass);
		
		//enviar un email al cliente con su contraseña
		// Guardar los datos recibidos en variables:
		$nombre = $_POST['nombre_usuario'] . ' ' . $_POST['apellido_usuario'];
		$mensaje = $pass;
		$dest = $_POST['email']; 
		 
		// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
		$headers = "From: $nombre $_POST[email]\r\n";
		$headers .= "X-Mailer: PHP5\n";
		$headers .= 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		// Aqui definimos el asunto y armamos el cuerpo del mensaje
		$asunto = "Claves de Acceso Panel administrativo 3R's";
		$cuerpo = 'Hola <b>' . $_POST['nombre_usuario'] . "</b>estos seran tus nuevos datos de acceso para el panel administrativo de 3R's de México";
		$cuerpo .= '<p>Usuario:	<b>'. $dest. '</b></p>';
		$cuerpo .= '<p>Contraseña: <b>'. $pass .'</b></p>';
		$cuerpo .= '<p><a href="http://3rsdemexico.com/3r-admin/" target="_blank">y podrás ingresar a tu panel de control pulsando aqui</a></p>';
		
		//enviar por fin el email
		mail($dest,$asunto,$cuerpo,$headers);//enviar el a su email su nombre de usuario y contraseña
	}//FIN if
	
	//declarar la consulta de actualizacion
	$consulta = "UPDATE usuarios SET ";		
	$consulta .= "nombre_usuario = '" . utf8_encode($_POST['nombre_usuario']) . "' , ";
	$consulta .= "apellido_usuario = '" . utf8_encode($_POST['apellido_usuario']) . "' , ";
	$consulta .= "clase_usuario = '" . utf8_encode($_POST['clase_usuario2']) . "' , ";
	$consulta .= "email = '" . utf8_encode($_POST['email']) . "' ";
	if(isset($_POST['regenerar'])				and 		!empty($_POST['regenerar']) and $_POST['regenerar'] == 'si'){
		$consulta .= ", pass = '" . $passmd5 . "' , ";
		$consulta .= "pass_no_ripp = '" . $pass . "' ";
	}
	$consulta .= "WHERE id_usuario = '" . $_POST['id_usuario'] . "'";
	
	//ejecutar actualizacion de la bdd's
	insertar_mysql($consulta);
	echo $consulta;
	//redirigir tras el proceso exitoso
	header('Location: ../panel-de-control.php?msg=upd_user_succ');
}
else{
	header('Location: ../panel-de-contraol.php?msg=upd_user_fail');
}
?>