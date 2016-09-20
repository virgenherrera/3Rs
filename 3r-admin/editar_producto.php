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
	<title>Editar propiedades de un producto</title>
	<script src="ckeditor/ckeditor.js"></script>
    </head>
	
    <body>
    <h2>en esta pagina puedes editar las propiedades del producto que seleccionaste

        
        <?php
        $consulta = 'SELECT * FROM productos WHERE id_producto = ' . $_POST['id_producto'];
		$producto = consulta_mysql($consulta);
        ?>
    <form action="php/editar_producto.php" method="post" enctype="multipart/form-data">
      <fieldset>
			<input type="hidden" name="id_producto" value="<?php echo $_POST['id_producto']; ?>">
            
            <input type="text" name="idioma" value="<?php echo utf8_decode($producto['idioma']); ?>">
            <label>Idioma</label><br>
            
            <input type="text" name="nombre_producto" value="<?php echo utf8_decode($producto['nombre_producto']); ?>">
            <label>Nombre del Producto</label><br>
            
            <textarea class="ckeditor" id="editor1" name="descripcion_producto">
            <?php echo utf8_decode($producto['descripcion_producto']); ?>
            </textarea>
            <label>Descripcion del Producto</label><br><br><hr>
            
			<p>
            imagen actual<br>
            <img src="../images/productos/<?php echo $producto['imagen_producto']; ?>"
            </p><br>
            
            <input type="file" value="<?php echo $producto['imagen_producto']; ?>" name="imagen_producto"><br>
                
             <br>   
			<input type="submit" value="Editar Producto">        	
        </fieldset>
    </form>
	</body>
	</html>
<?php
}
else{
	header('Location: index.php?error=4');
}