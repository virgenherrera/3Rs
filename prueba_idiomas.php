<?php
include_once 'php/funciones.php';

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$consulta = 'SELECT DISTINCT idioma FROM ' . 'quienes_somos';
	$idiomas = consulta_bucle($consulta);
	$idiomas_tabla = '';
	$indice = 0;
	$valor_devuelto = '';
	while($idioma = mysql_fetch_array($idiomas)){
		$idiomas_tabla[$indice] = $idioma['idioma'];
	}
	if(in_array(dime_idioma(),$idiomas_tabla)){
		$valor_devuelto = 'el valor que viene por parametro';
	}
	else{
		$valor_devuelto = 'el valor por default';	
	}
	echo $valor_devuelto;




?>
</body>
</html>