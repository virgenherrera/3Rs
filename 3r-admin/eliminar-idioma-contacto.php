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
	<title>ELIMINAR idioma:::&gt; CONTACTO</title>
	</head>
	
    <body>
    <h2>en esta pagina puedes eliminar un<br>LENGUAJE para la seccion:<br>
	<a href="../contacto.php" target="_blank">CONTACTO</a><br>

    <?php
	$idiomas = consulta_bucle('SELECT DISTINCT idioma FROM contacto');
	?>
    <form action="php/eliminar_idioma_co.php" method="post">
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