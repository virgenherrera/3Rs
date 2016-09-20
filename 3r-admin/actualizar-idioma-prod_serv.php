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
	<title>ACTUALIZAR idioma:::&gt; PRODUCTOS, SERVICIOS</title>
	<script src="ckeditor/ckeditor.js"></script>
    </head>
	
    <body>
    <h2>en esta pagina puedes actualizar <br>LENGUAJE para las secciones:<br>
    <a href="../productos.php" target="_blank">PRODUCTOS</a><br>
    <a href="../servicios.php" target="_blank">SERVICIOS</a></h2>
        
	<?php
	$consulta = "SELECT * FROM pagina_productos WHERE idioma ='" . $_GET['idioma'] . "'";
    $idiomas = consulta_mysql($consulta);
	?>
    <form action="php/actualizar_idioma.php" method="post">
	  <fieldset>
        <input type="hidden" name="id_producto" value="<?php echo $idiomas['id_producto']; ?>" >
        <input type="text" name="idioma" value="<?php echo $idiomas['idioma']; ?>" readonly>
        <label>Idioma</label><br><br><hr>
        
        <input class="titulo_producto" name="titulo_productos" value="<?php echo utf8_decode($idiomas['titulo_productos']); ?>" type="text" required>
        <label>Titulo de la pagina PRODUCTOS</label><br><hr>
        
        <textarea class="ckeditor" id="editor1" name="contenido_productos">
        <?php echo utf8_decode($idiomas['contenido_productos']); ?>
        </textarea>
        <label>Parrafo de contenido textual en la pagina productos</label><br><br><hr>
        
        <input name="titulo_servicios" type="text" required class="titulo_servicios" value="<?php echo utf8_decode($idiomas['titulo_servicios']); ?>">
        <label>Tutulo de la pagina SERVICIOS</label><br><hr>
        
        <textarea class="ckeditor" id="editor2" name="contenido_servicios">
        <?php echo utf8_decode($idiomas['contenido_servicios']); ?>
        </textarea>
        <label>Parrafo de contenido Textual en la pagina servicios</label><br><br><hr>
        
        <input type="submit" value="Actualizar Idioma">        	
      </fieldset>
	</form>
	</body>
	</html>
<?php
}
else{
	header('Location: index.php?error=4');
}