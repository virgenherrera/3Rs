<?php
/*Este documento sirve para procesar las peticiones de registro de nuesvos servicios*/
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

//en esta parte del codigo se procesan las editar un SERVICIO
if(	isset($_POST['id_servicio']) 		&&	 !empty($_POST['id_servicio'])	&&
	isset($_POST['idioma']) 		&&	 !empty($_POST['idioma'])	&&
	isset($_POST['nombre_servicio']) 		&&	 !empty($_POST['nombre_servicio'])	&&
	isset($_POST['descripcion_servicio']) 	&& 	!empty($_POST['descripcion_servicio']) ){
		//comprobar que los datos de formulario esten declarados y no esten vacios


		//Registrar los datos en la bdds
		$consulta  = 'UPDATE servicios SET ';
		$consulta .= "idioma = '" . $_POST['idioma'] . "' , ";
		$consulta .= "nombre_servicio = '" . utf8_encode($_POST['nombre_servicio']) . "' , ";
		$consulta .= "descripcion_servicio = '" . utf8_encode($_POST['descripcion_servicio']) . "' ";
		$consulta .= "WHERE id_servicio = '" . $_POST['id_servicio'] . "'";

		//insertar a mysql
		insertar_mysql($consulta);
		
		header('Location: ../panel-de-control.php?msg=serv_ed_succ');
	}//FIN if (AGREGAR SERVICIO)

?>