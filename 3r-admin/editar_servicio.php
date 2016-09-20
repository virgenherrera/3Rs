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
	<title>Editar propiedades de un servicio</title>
	<script src="ckeditor/ckeditor.js"></script>
    </head>
	
    <body>
    <h2>en esta pagina puedes editar las propiedades del servicio que seleccionaste

        
        <?php
        $consulta = 'SELECT * FROM servicios WHERE id_servicio = ' . $_POST['id_servicio'];
		$servicio = consulta_mysql($consulta);
        ?>
    <form action="php/editar_servicio.php" method="post">
      <fieldset>
			<input type="hidden" name="id_servicio" value="<?php echo $_POST['id_servicio']; ?>">
            
            <input type="text" name="idioma" value="<?php echo utf8_decode($servicio['idioma']); ?>">
            <label>Idioma</label><br>
            
            <input type="text" name="nombre_servicio" value="<?php echo utf8_decode($servicio['nombre_servicio']); ?>">
            <label>Nombre del Producto</label><br>
            
            <textarea class="ckeditor" id="editor1" name="descripcion_servicio">
            <?php echo utf8_decode($servicio['descripcion_servicio']); ?>
            </textarea>
            <label>Descripcion del Servicio</label><br><br><hr>
            
			
			<input type="submit" value="Editar Servicio">        	
        </fieldset>
    </form>
	</body>
	</html>
<?php
}
else{
	header('Location: index.php?error=4');
}