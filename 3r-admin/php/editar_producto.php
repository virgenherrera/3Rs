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

//en esta parte del codigo se procesan las editar un PRODUCTO
if(	isset($_POST['id_producto']) 		&&	 !empty($_POST['id_producto'])	&&
	isset($_POST['idioma']) 		&&	 !empty($_POST['idioma'])	&&
	isset($_POST['nombre_producto']) 		&&	 !empty($_POST['nombre_producto'])	&&
	isset($_POST['descripcion_producto']) 	&& 	!empty($_POST['descripcion_producto']) ){
		//comprobar que los datos de formulario esten declarados y no esten vacios
		
		//subir la imagen del producto al servidor si es que fue enviada
		if(isset($_FILES['imagen_producto']['name']) 	&& 	!empty($_FILES['imagen_producto']['name'])){
			move_uploaded_file($_FILES['imagen_producto']['tmp_name'],'../../images/productos/'.str_replace(' ','-',$_FILES['imagen_producto']['name']));
			$existe_imagen = true;
		}

		//Registrar los datos en la bdds
		$consulta  = 'UPDATE productos SET ';
		$consulta .= "idioma = '" . $_POST['idioma'] . "' , ";
		$consulta .= "nombre_producto = '" . utf8_encode($_POST['nombre_producto']) . "' , ";
		$consulta .= "descripcion_producto = '" . utf8_encode($_POST['descripcion_producto']) . "' ";
		if(isset($existe_imagen) 	&& 	$existe_imagen == true){
			$consulta .= ", imagen_producto = '" . $_FILES['imagen_producto']['name'] . "' ";
		}
		$consulta .= "WHERE id_producto = '" . $_POST['id_producto'] . "'";

		//insertar a mysql
		insertar_mysql($consulta);
		
		header('Location: ../panel-de-control.php?msg=prod_ed_succ');
	}//FIN if (AGREGAR PRODUCTO)

?>