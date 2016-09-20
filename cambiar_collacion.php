<?php
include_once 'php/conexion.php';
 
$codificacion="utf8";//La codificacion que se quiere colocar en las tablas
$collation="utf8";//El collation para las tablas
 
$db = mysql_connect($host,$usuario,$pass);
 
if(!$db){echo "Imposible conectar a la base de datos. Por favor revisa los parametros";}
 
mysql_select_db($bdd);
 
$tablas=mysql_query("show tables");
 
while($tabla=mysql_fetch_array($tablas)){
 
echo "Cambiando tabla $tabla[0] ";mysql_query("ALTER TABLE `".$tabla[0]."` CONVERT TO CHARACTER SET ".$codificacion." COLLATE ".$collation) or die(mysql_error());
 
}
 
echo "Proceso realizado con exito!";
?>