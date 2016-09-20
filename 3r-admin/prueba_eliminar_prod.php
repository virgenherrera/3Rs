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
$consulta = 'SELECT * FROM productos';
$productos = consulta_bucle($consulta);
?>
<h3>Estos son los PRODUCTOS actualmente instalados</h3>
<?php
while($producto = mysql_fetch_array($productos)){
	echo '<h4>id del producto: ' . $producto['id_producto'] . '</h4>';
	echo '<p>Idioma: ' . utf8_decode($producto['idioma']) . '<br>Nombre: ' . utf8_decode($producto['nombre_producto']) . '<br>Descripcion:';
	echo utf8_decode($producto['descripcion_producto']) . '<br>Imagen: <img src="./images/productos/' . $producto['imagen_producto'] . '" ></p><hr>';
}//FIN while
?>
<br><hr>
<h3>Selecciona el PRODUCTO que deseas ELIMINAR</h3>
<form action="php/eliminar_producto" method="post">
    <fieldset>
    	
        <select name="idioma_prod" class="idioma_prod">
        	<?php
			$productos = consulta_bucle($consulta);
			while($producto = mysql_fetch_array($productos)){
				echo '<option value="' . $producto['id_producto'] . '">' . $producto['id_producto'] . '</option>';
			}//fin while idiomas
			?>            
        </select>
        <label>Selecciona el ID del producto que deseas ELIMINAR</label><br>
        
        <input type="submit" onclick="return confirm('¿Estás seguro que deseas eliminar este PRODUCTO?')" value="Eliminar Producto">
		
	</fieldset>
</form>

</body>
</html>