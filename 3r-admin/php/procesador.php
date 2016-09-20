<?php
/*Este documento sirve para procesar las peticiones de registro de nuesvos productos*/
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

//en esta parte del codigo se procesan las inserciones de nuevos PRODUCTO
if(	isset($_POST['idioma']) 		&&	 !empty($_POST['idioma'])	&&
	isset($_POST['nombre_producto']) 		&&	 !empty($_POST['nombre_producto'])	&&
	isset($_POST['descripcion_producto']) 	&& 	!empty($_POST['descripcion_producto']) &&
	isset($_FILES['imagen_producto']['name']) 	&& 	!empty($_FILES['imagen_producto']['name'])){
		//comprobar que los datos de formulario esten declarados y no esten vacios
		
		//subir la imagen del producto al servidor
		move_uploaded_file($_FILES['imagen_producto']['tmp_name'],'../../images/productos/'.str_replace(' ','-',$_FILES['imagen_producto']['name']));

		//Registrar los datos en la bdds
		$consulta = "INSERT INTO `productos` (`idioma`, `nombre_producto`, `descripcion_producto`, `imagen_producto`) 
		VALUES ('".$_POST['idioma'] . "', '" . $_POST['nombre_producto'] . "', '". $_POST['descripcion_producto'] . "', '" . $_FILES['imagen_producto']['name'] ."')";
		
		//insertar a mysql
		insertar_mysql($consulta);
		
		header('Location: ../panel-de-control.php?msg=prod_succ');
	}//FIN if (AGREGAR PRODUCTO)

//en esta parte del codigo se procesan las inserciones de nuevos SERVICIOS
elseif(	isset($_POST['idioma'])			&&		!empty($_POST['idioma'])	&&
		isset($_POST['nombre_servicio'])			&&		!empty($_POST['nombre_servicio'])	&&
		isset($_POST['descripcion_servicio'])			&&		!empty($_POST['descripcion_servicio'])	){
			//Comprobar que los datos del formulario esten declarados y no esten vacios
			
			//Registrar los datos en la bdds
		$consulta = "INSERT INTO `servicios` (`idioma`, `nombre_servicio`, `descripcion_servicio`) 
		VALUES ('".$_POST['idioma'] . "', '" . utf8_encode($_POST['nombre_servicio']) . "', '". utf8_encode($_POST['descripcion_servicio']) . "')";
		
		//insertar a mysql
		insertar_mysql($consulta);
		
		header('Location: ../panel-de-control.php?msg=serv_succ');
		}//FIN elseif (AGREGAR SERVICIO)

//en esta parte del codigo se procesan las inserciones de nuevos USUARIOS
elseif(	isset($_POST['nombre_usuario'])	&&		!empty($_POST['nombre_usuario'])	&&
		isset($_POST['apellido_usuario'])	&&		!empty($_POST['apellido_usuario'])	&&
		isset($_POST['usuario'])	&&		!empty($_POST['usuario'])	&&
		isset($_POST['clase'])		&&		!empty($_POST['clase'])	){
			
			//generar la contraseña de nuevo usuario
			$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
			$cad = "";
			for($i=0;$i<12;$i++) {
			$pass .= substr($str,rand(0,62),1);
			}
			$passmd5 = md5($pass);
			
			//Registrar los datos en la bdds
			$consulta = "INSERT INTO `usuarios` (`nombre_usuario`, `apellido_usuario`, `email`, `pass`, `pass_no_ripp`, `clase_usuario`) 			VALUES ('" . utf8_encode($_POST['nombre_usuario']) . "', '" . utf8_encode($_POST['apellido_usuario']) . "', '". $_POST['usuario'] . "','" . $passmd5 . "','" . $pass . "','" . $_POST['clase'] ."')";
		
		//insertar a mysql
		insertar_mysql($consulta);
		
		//enviar un email al cliente con su contraseña
		// Guardar los datos recibidos en variables:
		$nombre = $_POST['nombre_usuario'] . ' ' . $_POST['apellido_usuario'];
		$mensaje = $pass;
		$dest = $_POST['usuario']; 
		 
		// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
		$headers = "From: $nombre $email\r\n";
		$headers .= "X-Mailer: PHP5\n";
		$headers .= 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		// Aqui definimos el asunto y armamos el cuerpo del mensaje
		$asunto = "Claves de Acceso Panel administrativo 3R's";
		$cuerpo = 'Hola <b>' . $_POST['nombreusuario'] . "</b>estos seran tus datos de acceso para el panel administrativo de 3R's de México";
		$cuerpo .= '<p>Usuario:	<b>'. $dest. '</b></p>';
		$cuerpo .= '<p>Contraseña: <b>'. $pass .'</b></p>';
		$cuerpo .= '<p><a href="http://3rsdemexico.com/3r-admin/" target="_blank">y podrás ingresar a tu panel de control pulsando aqui</a></p>';
		
		//enviar por fin el email
		mail($dest,$asunto,$cuerpo,$headers);//enviar el a su email su nombre de usuario y contraseña

		header('Location: ../panel-de-control.php?msg=user_succ');
		}//FIN elseif (AGREGAR USUARIO)
		

?>