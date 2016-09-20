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
    <title>ACTUALIZAR idioma:::&gt; ENCABEZADO</title>
    
    </head>
    
    <body>
    <h2>en esta pagina puedes agregar un<br>nuevo LENGUAJE para El encabezado</h2>
    <script src="ckeditor/ckeditor.js"></script>
    <?php
	$consulta = "SELECT * FROM encabezado WHERE idioma = '" . $_GET['idioma'] . "'";
	$idioma = consulta_mysql($consulta);
	?>
    <form action="php/actualizar_idioma.php" method="post">
        <fieldset>
            <input type="hidden" name="id_encabezado" value="<?php echo $idioma['id_encabezado']; ?>" >
            <input type="text" name="idioma" value="<?php echo $idioma['idioma']; ?>" readonly>
            <label>Idioma</label><br><br><hr>
            
            <input type="text" class="quienes_somos" name="quienes_somos" value="<?php echo utf8_decode($idioma['quienes_somos']); ?>" required>
            <label>MENU Quienes Somos</label><br>
            
            <input type="text" class="crear_alianza" name="crear_alianza" value="<?php echo utf8_decode($idioma['crear_alianza']); ?>" required>
            <label>MENU Crear Alianza</label><br>
            
            <input type="text" class="productos" name="productos" value="<?php echo utf8_decode($idioma['productos']); ?>" required>
            <label>MENU Productos</label><br>
            
            <input type="text" class="servicios" name="servicios" value="<?php echo utf8_decode($idioma['servicios']); ?>" required>
            <label>MENU Servicios</label><br>
            
            <input type="text" class="contacto" name="contacto" value="<?php echo utf8_decode($idioma['contacto']); ?>" required>
            <label>MENU Contacto</label><br>
            
            <input type="text" class="link_idioma" name="link_idioma" value="<?php echo utf8_decode($idioma['link_idioma']); ?>" required>
            <label>MENU Idioma</label><br>
                                
			<input type="submit" value="Actualizar idioma">
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