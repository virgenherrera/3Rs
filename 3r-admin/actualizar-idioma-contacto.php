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
	<title>ACTUALIZAR idioma:::&gt; CONTACTO</title>
	</head>
	
    <body>
    <h2>en esta pagina puedes actualizar el<br> LENGUAJE para la seccion:<br>
    <a href="../contacto.php" target="_blank">CONTACTO</a><br>
	<script src="ckeditor/ckeditor.js"></script>
    <?php
	$consulta = "SELECT * FROM contacto WHERE idioma = '" . $_GET['idioma'] . "'";
    $contacto = consulta_mysql($consulta);
    ?>
    <form action="php/actualizar_idioma.php" method="post">
	    <fieldset>
        	<input type="hidden" name="id_contacto" value="<?php echo $contacto['id_contacto']; ?>" >
            
          <input type="text" name="idioma" value="<?php echo $contacto['idioma']; ?>" readonly>
            <label>Idioma</label><br><br><hr>
                
            <input type="text" class="titulo_contacto" name="titulo_contacto" value="<?php echo utf8_decode($contacto['titulo_contacto']); ?>" requiered>
            <label>Titulo de la Pagina CONTACTO</label><br><hr>
            
          <textarea class="ckeditor" id="editor1" name="contenido_1">
            <?php echo utf8_decode($contacto['contenido_1']); ?>
            </textarea>
            <label>contenido textual del Parrafo a la izquierda de Gmap</label><br><br><hr>
            
          <input type="text" class="titulo_formulario" value="<?php echo utf8_decode($contacto['titulo_formulario']); ?>" name="titulo_formulario" requiered>
            <label>Titulo del Formulario de Contacto</label><br>
            
            <input name="label_nombre" type="text" class="label_nombre" value="<?php echo utf8_decode($contacto['label_nombre']); ?>" requiered>
            <label>etiqueta nombre</label><br>
            
            <input type="text" class="label_email" name="label_email" value="<?php echo utf8_decode($contacto['label_email']); ?>" requiered>
            <label>etiqueta email</label><br>
            
            <input type="text" class="label_asunto" name="label_asunto" value="<?php echo utf8_decode($contacto['label_asunto']); ?>" requiered>
            <label>etiqueta asunto</label><br>
            
            <input type="text" class="label_mensaje" name="label_mensaje" value="<?php echo utf8_decode($contacto['label_mensaje']); ?>" requiered>
            <label>etiqueta mensaje</label><br>
            
            <input type="text" class="texto_boton" name="texto_boton" value="<?php echo utf8_decode($contacto['texto_boton']); ?>" requiered>
            <label>texto de boton "enviar"</label><br>
            
            <input type="text" class="texto_msg_enviado" name="texto_msg_enviado" value="<?php echo utf8_decode($contacto['texto_msg_enviado']); ?>" requiered>
            <label>mensaje que aparece cuando se envia el formulario</label><br><br><hr>
            
            <input type="text" class="titulo_direccion" name="titulo_direccion" value="<?php echo utf8_decode($contacto['titulo_direccion']); ?>" requiered>
            <label>Titulo del parrafo que aparece debajo el Gmap</label><br>
            
            <textarea class="ckeditor" id="editor2" name="texto_direccion">
            <?php echo utf8_decode($contacto['texto_direccion']); ?>
            </textarea>
            <label>Parrafo que aparece debajo el Gmap</label><br><br>
            
            <input name="Enviar" type="submit" value="Actualizar Idioma">        	
        </fieldset>
    </form>
	</body>
	</html>
<?php
}
else{
	header('Location: index.php?error=4');
}