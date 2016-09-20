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
	<title>AGREGAR idioma:::&gt; PRODUCTOS, SERVICIOS</title>
	<script src="ckeditor/ckeditor.js"></script>
    </head>
	
    <body>
    <h2>en esta pagina puedes agregar un<br>nuevo LENGUAJE para las secciones:<br>
    <a href="../productos.php" target="_blank">PRODUCTOS</a><br>
    <a href="../servicios.php" target="_blank">SERVICIOS</a></h2>
        
        <?php
        $idiomas = consulta_bucle('SELECT * FROM idiomas WHERE codigo_idioma NOT IN (SELECT idioma FROM pagina_productos) ORDER BY popular, nombre_idioma ASC');
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
                
                <input class="titulo_producto" name="titulo_productos" type="text" required>
                <label>Titulo de la pagina PRODUCTOS</label><br><hr>
                
                <textarea class="ckeditor" id="editor1" name="contenido_productos"></textarea>
                <label>Parrafo de contenido textual en la pagina productos</label><br><br><hr>
                
                <input class="titulo_servicios" name="titulo_servicios" type="text" required>
                <label>Tutulo de la pagina SERVICIOS</label><br><hr>
                
                <textarea class="ckeditor" id="editor2" name="contenido_servicios"></textarea>
                <label>Parrafo de contenido Textual en la pagina servicios</label><br><br><hr>
                
                <input type="submit" value="Instalar Idioma">        	
        </fieldset>
    </form>
	</body>
	</html>
<?php
}
else{
	header('Location: index.php?error=4');
}