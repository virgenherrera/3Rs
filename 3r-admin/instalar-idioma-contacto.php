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
	<title>AGREGAR idioma:::&gt; CONTACTO</title>
	</head>
	
    <body>
    <h2>en esta pagina puedes agregar un<br>nuevo LENGUAJE para la seccion:<br>
    <a href="../contacto.php" target="_blank">CONTACTO</a><br>
	<script src="ckeditor/ckeditor.js"></script>
    <?php
    $idiomas = consulta_bucle('SELECT * FROM idiomas WHERE codigo_idioma NOT IN (SELECT idioma FROM contacto) ORDER BY popular, nombre_idioma ASC');
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
                
                <input type="text" class="titulo_contacto" name="titulo_contacto" requiered>
                <label>Titulo de la Pagina CONTACTO</label><br><hr>
                
                <textarea class="ckeditor" id="editor1" name="contenido_1"></textarea>
                <label>contenido textual del Parrafo a la izquierda de Gmap</label><br><br><hr>
                
                <input type="text" class="titulo_formulario" name="titulo_formulario" requiered>
                <label>Titulo del Formulario de Contacto</label><br>
                
                <input type="text" class="label_nombre" name="label_nombre" requiered>
                <label>etiqueta nombre</label><br>
                
                <input type="text" class="label_email" name="label_email" requiered>
                <label>etiqueta email</label><br>
                
                <input type="text" class="label_asunto" name="label_asunto" requiered>
                <label>etiqueta asunto</label><br>
                
                <input type="text" class="label_mensaje" name="label_mensaje" requiered>
                <label>etiqueta mensaje</label><br>
                
                <input type="text" class="texto_boton" name="texto_boton" requiered>
                <label>texto de boton "enviar"</label><br>
                
                <input type="text" class="texto_msg_enviado" name="texto_msg_enviado" requiered>
                <label>mensaje que aparece cuando se envia el formulario</label><br><br><hr>
                
                <input type="text" class="titulo_direccion" name="titulo_direccion" requiered>
                <label>Titulo del parrafo que aparece debajo el Gmap</label><br>
                
                <textarea class="ckeditor" id="editor2" name="texto_direccion"></textarea>
                <label>Parrafo que aparece debajo el Gmap</label><br><br>
                
                <input name="Enviar" type="submit" value="Instalar Idioma">        	
        </fieldset>
    </form>
	</body>
	</html>
<?php
}
else{
	header('Location: index.php?error=4');
}