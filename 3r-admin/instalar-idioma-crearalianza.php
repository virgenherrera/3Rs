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
    <title>AGREGAR idioma:::&gt; Crear Alianza</title>
    <script src="ckeditor/ckeditor.js"></script>
    </head>
    
    <body>
    <h2>en esta pagina puedes agregar un<br>nuevo LENGUAJE para la seccion: <a href="../crear-alianza.php" target="_blank">CREAR ALIANZA</a></h2>
    
    <?php
	$idiomas = consulta_bucle('SELECT * FROM idiomas WHERE codigo_idioma NOT IN (SELECT idioma FROM crear_alianza) ORDER BY popular, nombre_idioma ASC');
	?>
    <form action="php/agregar_idioma.php" method="post">
      <fieldset>
            <h1>Primero selecciona el idioma del LENGUAJE que deseas instalar</h1>
                <div>
                
                <select class="idioma" name="idioma" size="1">
                <?php
                while($idioma = mysql_fetch_array($idiomas)){
                 echo '<option value="' . $idioma['codigo_idioma'] . '">' . utf8_encode($idioma['nombre_idioma']) . '</option>';
                }//fin while 
                ?>
                </select>
                <label>Idioma</label><br><br><hr>
                
                <input class="alianza" name="alianza" type="text" required>
                <label>Titulo de la Pagina CREAR ALIANZA</label><br><hr>
                
                <textarea class="ckeditor" id="editor1" name="contenido_1"></textarea>
                <label>primer parrafo de contenido textual</label><br><br><hr>
                
                <textarea class="ckeditor" id="editor2" name="contenido_2"></textarea>
                <label>segundo parrafo de contenido textual</label><br><br><hr>
                
              <input class="contacto" name="liga_contacto" required>
              <label>Palabra "contacto" que aparece bajo el parrafo #2</label><br><hr>
                
                <textarea class="ckeditor" id="editor3" name="parrafo_adicional_1"></textarea>
                <label>Parrafo OPCIONAL de texto #1</label><br><br><hr>
                
                <textarea class="ckeditor" id="editor4" name="parrafo_adicional_2"></textarea>
                <label>Parrafo OPCIONAL de texto #2</label><br><br><hr>
                
                <textarea class="ckeditor" id="editor5" name="parrafo_adicional_3"></textarea>
                <label>Parrafo OPCIONAL de texto #3</label><br><br><hr>
                
                <textarea class="ckeditor" id="editor6" name="parrafo_adicional_4"></textarea>
                <label>Parrafo OPCIONAL de texto #4</label><br><br><hr>
                
                <input type="submit" value="Instalar Idioma">
                
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