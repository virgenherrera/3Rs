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
    <title>EDITAR idioma:::&gt; Crear Alianza</title>
    <script src="ckeditor/ckeditor.js"></script>
    </head>
    
    <body>
    <h2>en esta pagina puedes actualizar un<br>LENGUAJE para la seccion: <a href="../crear-alianza.php" target="_blank">CREAR ALIANZA</a></h2>
    
    <?php
	$consulta = "SELECT * FROM crear_alianza WHERE idioma = '" . $_GET['idioma'] . "'";
	$idiomas = consulta_mysql($consulta);
	?>
    <form action="php/actualizar_idioma.php" method="post">
      <fieldset>
      	<input type="hidden" name="id_alianza" value="<?php echo $idiomas['id_alianza']; ?>" >
        <input name="idioma" type="text" value="<?php echo $idiomas['idioma']; ?>" readonly>
            
        <label>Idioma</label><br><br><hr>
        
        <input class="alianza" name="titulo_alianza" type="text" value="<?php echo utf8_decode($idiomas['titulo_alianza']); ?>">
        <label>Titulo de la Pagina CREAR ALIANZA</label><br><hr>
        
        <textarea class="ckeditor" id="editor1" name="contenido_1">
        <?php echo utf8_decode($idiomas['contenido_1']); ?>
        </textarea>
        <label>primer parrafo de contenido textual</label><br><br><hr>
        
        <textarea class="ckeditor" id="editor2" name="contenido_2">
       	<?php echo utf8_decode($idiomas['contenido_2']); ?>
        </textarea>
        <label>segundo parrafo de contenido textual</label><br><br><hr>
        
      	<input class="contacto" name="liga_contacto" value="<?php echo utf8_decode($idiomas['liga_contacto']); ?>" required>
     	 <label>Palabra "contacto" que aparece bajo el parrafo #2</label><br><hr>
        
        <textarea class="ckeditor" id="editor3" name="parrafo_adicional_1">
        <?php echo utf8_decode($idiomas['parrafo_adicional_1']); ?>
        </textarea>
        <label>Parrafo OPCIONAL de texto #1</label><br><br><hr>
        
        <textarea class="ckeditor" id="editor4" name="parrafo_adicional_2">
        <?php echo utf8_decode($idiomas['parrafo_adicional_2']); ?>
        </textarea>
        <label>Parrafo OPCIONAL de texto #2</label><br><br><hr>
        
        <textarea class="ckeditor" id="editor5" name="parrafo_adicional_3">
        <?php echo utf8_decode($idiomas['parrafo_adicional_3']); ?>
        </textarea>
        <label>Parrafo OPCIONAL de texto #3</label><br><br><hr>
        
        <textarea class="ckeditor" id="editor6" name="parrafo_adicional_4">
        <?php echo utf8_decode($idiomas['parrafo_adicional_4']); ?>
        </textarea>
        <label>Parrafo OPCIONAL de texto #4</label><br><br><hr>
        
        <input type="submit" value="Actualizar Idioma">
                
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