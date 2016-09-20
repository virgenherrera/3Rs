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


if(	isset($_POST['id_producto']) and !empty($_POST['id_producto'])){
	
	//eliminar archiivo del host
	$consulta = 'select * from productos where id_producto = ' . $_POST['id_producto'];
	$img = consulta_mysql($consulta);
	$ruta_imagen = '../../images/productos/' . $img['imagen_producto'];
	unlink($ruta_imagen);
	
	//eliminar registro del producto de la bdd
	$consulta = 'DELETE FROM productos WHERE id_producto = ' . $_POST['id_producto'];
	insertar_mysql($consulta);
	
	//redirigir tras el proceso exitoso
	header('Location: ../panel-de-control.php?msg=del_prod_succ');
}
?>