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
    <title>Actualizar idioma:::&gt; QUIENES SOMOS</title>
    
    </head>
    
    <body>
    <h2>en esta pagina puedes Actualizar <br>el LENGUAJE para la seccion: <a href="../index.php" target="_blank">QUIENES SOMOS</a></h2>
    <script src="ckeditor/ckeditor.js"></script>
    <?php
	$consulta = "SELECT * FROM quienes_somos WHERE idioma = '" . $_GET['idioma'] . "'";
	$textos = consulta_mysql($consulta);
	?>
    <form action="php/actualizar_idioma.php" method="post">
        <fieldset>
            <input type="hidden" name="id_quienes_somos" value="<?php echo utf8_decode($textos['id_quienes_somos']); ?>">
            <input name="idioma" type="text" value="<?php echo utf8_decode($textos['idioma']); ?>">
            <label>Idioma</label><br>

            
            <input class="texto_reduce" name="texto_reduce" type="text" value="<?php echo utf8_decode($textos['texto_reduce']); ?>" required>
          <label>Palabra <em><strong>"REDUCE"</strong></em></label><br>
            
            <input name="texto_reutiliza" type="text" required class="texto_reutiliza" value="<?php echo utf8_decode($textos['texto_reutiliza']); ?>">
            <label>Palabra <em><strong>"REUTILIZA"</strong></em></label><br>
            
            <input name="texto_recicla" type="text" required class="texto_recicla" value="<?php echo utf8_decode($textos['texto_recicla']); ?>">
          <label>Palabra <em><strong>"RECICLA"</strong></em></label><br><br>
            
          <input class="titulo_mision" name="titulo_mision" type="text" value="<?php echo utf8_decode($textos['titulo_mision']); ?>" required>
            <label>titulo <em><strong>"MISION"</strong></em></label><br>
            
            <textarea class="ckeditor" id="editor1" name="texto_mision">
            <?php echo utf8_decode($textos['texto_mision']); ?>
            </textarea>
            <label>contenido textual de <em><strong>"MISION"</strong></em></label><br><br><hr>
            
            <input name="titulo_vision" type="text" required class="titulo_vision" value="<?php echo utf8_decode($textos['titulo_vision']); ?>">
            <label>titulo <em><strong>"VISION"</strong></em></label><br>
            
          <textarea class="ckeditor" id="editor2" name="texto_vision">
            <?php echo utf8_decode($textos['texto_vision']); ?>
            </textarea>
            <label>contenido textual de <em><strong>"VISION"</strong></em></label><br><br><hr>
            
            <input name="titulo_objetivo" type="text" required class="titulo_objetivo" value="<?php echo utf8_decode($textos['titulo_objetivo']); ?>"><br>
            <label>titulo <em><strong>"OBJETIVO"</strong></em></label><br>
            
            <textarea class="ckeditor" id="editor3" name="texto_objetivo">
            <?php echo utf8_decode($textos['texto_objetivo']); ?>
            </textarea>
            <label>contenido textual de <em><strong>"OBJETIVO"</strong></em></label><br><br><hr>
            
            <input name="titulo_calidad_eficiencia" type="text" required class="titulo_calidad_eficiencia" value="<?php echo utf8_decode($textos['titulo_calidad_eficiencia']); ?>"><br>
            <label>titulo <em><strong>"CALIDAD Y EFICIENCIA"</strong></em></label><br>
            
            <textarea class="ckeditor" id="editor4" name="texto_calidad_eficiencia">
            <?php echo utf8_decode($textos['texto_calidad_eficiencia']); ?>
            </textarea>
            <label>contenido textual de <em><strong>"CALIDAD Y EFICIENCIA"</strong></em></label><br><br><hr>
            
            <textarea class="ckeditor" id="editor5" name="parrafo_1">
            <?php echo utf8_decode($textos['parrafo_1']); ?>
            </textarea>
          <label>contenido textual del <em><strong>"PARRAFO ADICIONAL #1"</strong></em></label><br><br><hr>
            
            <textarea class="ckeditor" id="ditor6" name="parrafo_2">
            <?php echo utf8_decode($textos['parrafo_2']); ?>
            </textarea>
          <label>contenido textual del <em><strong>"PARRAFO ADICIONAL #2"</strong></em></label><br><br><hr>
            
            <textarea class="ckeditor" id="editor7" name="parrafo_3">
            <?php echo utf8_decode($textos['parrafo_3']); ?>
            </textarea>
          <label>contenido textual del <em><strong>"PARRAFO ADICIONAL #3"</strong></em></label><br><br><hr>
            
            <textarea class="ckeditor" id="editor8" name="parrafo_4">
            <?php echo utf8_decode($textos['parrafo_4']); ?>
            </textarea>
          <label>contenido textual del <em><strong>"PARRAFO ADICIONAL #4"</strong></em></label><br><br><hr>
            
          <input type="submit" value="Actualizar Lenguaje">
            
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