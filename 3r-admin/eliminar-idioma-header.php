<?php
session_start();
//verificar que el usuario se haya logueado
if(isset($_SESSION['3rs_mexico'])){
	include_once 'php/funciones.php';
	?>
    <!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>ELIMINAR idioma:::&gt; ENCABEZADO</title>
    
    </head>
    
    <body>
	<h2>en esta pagina puedes agregar un<br>nuevo LENGUAJE para El encabezado</h2>


    <?php
	$idiomas = consulta_bucle('SELECT DISTINCT idioma FROM encabezado');
	?>
    <form action="php/eliminar_idioma_en.php" method="post">
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
}//FIN if
else{
	header('Location: index.php?error=4');
}
?>