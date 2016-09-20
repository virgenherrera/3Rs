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
    <title>AGREGAR idioma:::&gt; QUIENES SOMOS</title>
    
    </head>
    
    <body>
    <h2>en esta pagina puedes agregar un<br>nuevo LENGUAJE para la seccion: <a href="../index.php" target="_blank">QUIENES SOMOS</a></h2>
    <script src="ckeditor/ckeditor.js"></script>
    <?php
	$idiomas = consulta_bucle('SELECT * FROM idiomas WHERE codigo_idioma NOT IN (SELECT idioma_encabezado FROM lenguajes) ORDER BY popular, nombre_idioma ASC');
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
                
                <input class="texto_reduce" name="texto_reduce" type="text" required>
                <label>Palabra <em><strong>"REDUCE"</strong></em></label><br>
                
 		  		<input class="texto_reutiliza" name="texto_reutiliza" type="text" required>
                <label>Palabra <em><strong>"REUTILIZA"</strong></em></label><br>
                
  		  		<input class="texto_recicla" name="texto_recicla" type="text" required>
                <label>Palabra <em><strong>"RECICLA"</strong></em></label><br><br>
                
   		  		<input class="titulo_mision" name="titulo_mision" type="text" required>
                <label>titulo <em><strong>"MISION"</strong></em></label><br>
                
   		  		<textarea class="ckeditor" name="texto_mision" required></textarea>
                <label>contenido textual de <em><strong>"MISION"</strong></em></label><br><br><hr>
                
                <input class="titulo_vision" name="titulo_vision" type="text" required>
                <label>titulo <em><strong>"VISION"</strong></em></label><br>
                
                <textarea class="ckeditor" name="texto_vision" required></textarea>
                <label>contenido textual de <em><strong>"VISION"</strong></em></label><br><br><hr>
                
   		  		<input class="titulo_objetivo" name="titulo_objetivo" type="text" required><br>
                <label>titulo <em><strong>"OBJETIVO"</strong></em></label><br>
                
                <textarea class="ckeditor" name="texto_objetivo" required></textarea>
                <label>contenido textual de <em><strong>"OBJETIVO"</strong></em></label><br><br><hr>
                
                <input class="titulo_calidad_eficiencia" name="titulo_calidad_eficiencia" type="text" required><br>
                <label>titulo <em><strong>"CALIDAD Y EFICIENCIA"</strong></em></label><br>
                
                <textarea class="ckeditor" name="texto_calidad_eficiencia" required></textarea>
                <label>contenido textual de <em><strong>"CALIDAD Y EFICIENCIA"</strong></em></label><br><br><hr>
                
                <textarea class="ckeditor" name="parrafo_1"></textarea>
                <label>contenido textual del <em><strong>"PARRAFO ADICIONAL #1"</strong></em></label><br><br><hr>
                
                <textarea class="ckeditor" name="parrafo_2"></textarea>
                <label>contenido textual del <em><strong>"PARRAFO ADICIONAL #2"</strong></em></label><br><br><hr>
                
                <textarea class="ckeditor" name="parrafo_3"></textarea>
                <label>contenido textual del <em><strong>"PARRAFO ADICIONAL #3"</strong></em></label><br><br><hr>
                
                <textarea class="ckeditor" name="parrafo_4"></textarea>
                <label>contenido textual del <em><strong>"PARRAFO ADICIONAL #4"</strong></em></label><br><br><hr>
                
                <input type="submit" value="Guardar Cambios">
            
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