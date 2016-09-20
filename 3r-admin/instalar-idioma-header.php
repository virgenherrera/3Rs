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
    <title>AGREGAR idioma:::&gt; ENCABEZADO</title>
    
    </head>
    
    <body>
    <h2>en esta pagina puedes agregar un<br>nuevo LENGUAJE para El encabezado</h2>
    <script src="ckeditor/ckeditor.js"></script>
    <?php
	$idiomas = consulta_bucle('SELECT * FROM idiomas WHERE codigo_idioma NOT IN (SELECT idioma FROM encabezado) ORDER BY popular, nombre_idioma ASC');
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
                
                <input type="text" class="quienes_somos" name="quienes_somos" required>
                <label>MENU Quienes Somos</label><br>
                
                <input type="text" class="crear_alianza" name="crear_alianza" required>
                <label>MENU Crear Alianza</label><br>
                
                <input type="text" class="productos" name="productos" required>
                <label>MENU Productos</label><br>
                
                <input type="text" class="servicios" name="servicios" required>
                <label>MENU Servicios</label><br>
                         
                <input type="text" class="contacto" name="contacto" required>
                <label>MENU Contacto</label><br>
                
                <input type="text" class="link_idioma" name="link_idioma" required>
                <label>MENU Idioma</label><br>
                                
                <input type="submit" value="Agregar idioma">
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