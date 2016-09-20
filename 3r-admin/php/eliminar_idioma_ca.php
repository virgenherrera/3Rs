<?php
//en este script se procesan todas las adiciones de idiomas en las secciones
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


//en esta seccion se hace el proceso de eliminar lenguaje a la seccion QUIENES SOMOS
if(isset($_POST['idioma'])	&& !empty($_POST['idioma'])){
	
	//eliminar registro del producto de la bdd
	$consulta = 'DELETE FROM crear_alianza WHERE idioma = "' . $_POST['idioma'] . '"';
	insertar_mysql($consulta);
	
	//redirigir al finalizar
	header('location: ../panel-de-control.php?msg=elim_lang_ca');
}
//en esta seccion se hace el proceso de redirigir si no se puedo validar ninguna adicion
else{
	//Redirigir la ventana si no se logro ninguna validacion
	header('location:../ panel-de-control.php?msg=er_lang_ca');	
}
?>