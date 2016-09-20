<?php
session_start();
//validar qu el usuario se haya logueado
if(isset($_SESSION['3rs_mexico'])){
	include_once 'php/funciones.php';
	?>
	<!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>AGREGAR idioma:::&gt; PRODUCTOS, SERVICIOS</title>
	<script src="ckeditor/ckeditor.js"></script>
    </head>
	
    <body>
    <h2>en esta pagina puedes eliminar un<br>LENGUAJE para las secciones:<br>
    <a href="../productos.php" target="_blank">PRODUCTOS</a><br>
    <a href="../servicios.php" target="_blank">SERVICIOS</a></h2>

    <?php
	$idiomas = consulta_bucle('SELECT DISTINCT idioma FROM pagina_productos');
	?>
    <form action="php/eliminar_idioma_ps.php" method="post">
    	<fieldset>
        	<select name="idioma" class="idioma" id="idioma">
            	<?php
				while($idioma = mysql_fetch_array($idiomas)){
					echo '<option value="' . $idioma['idioma'] . '">' . $idioma['idioma'] . '</option>';
				}//fin de while
				?>
            </select><br>
            
            
            <input type="submit" onclick="return confirm('¿Estás seguro que deseas eliminar este LENGUAJE?')" value="Eliminar Lenguaje">
        </fieldset>
    </form>
	</body>
	</html>
<?php
}
else{
	header('Location: index.php?error=4');
}