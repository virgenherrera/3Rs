<?php
session_start();
//verificar que el usuario este logueado
if(isset($_SESSION['3rs_mexico'])){
	include_once 'php/funciones.php';
	?>
    <!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>ELIMINAR idioma:::&gt; Crear Alianza</title>
    <script src="ckeditor/ckeditor.js"></script>
    </head>
    
    <body>
    <h2>en esta pagina puedes eliminar un<br>LENGUAJE para la seccion: <a href="../crear-alianza.php" target="_blank">Crear Alianza</a></h2>
    <?php
	$idiomas = consulta_bucle('SELECT DISTINCT idioma FROM crear_alianza');
	?>
    <form action="php/eliminar_idioma_ca.php" method="post">
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
}//fin if
else{
	header('Location: index.php?error=4');
}
?>