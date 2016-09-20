<?php
session_start();
//verificar que el usuario se haya logueado
if(isset($_SESSION['3rs_mexico'])){
	include_once 'php/funciones.php';
	?>
	<!doctype html>
    <html>
    <head>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <meta charset="utf-8">
	<title>Editar la pagina:::&gt; QUIENES SOMOS</title>
    <script src="ckeditor/ckeditor.js"></script>
	</head>
	
	<body>
    <h2>en esta pagina puedes agregar un<br>nuevo LENGUAJE para la seccion: <a href="../index.php" target="_blank">QUIENES SOMOS</a></h2>
    <?php
	$idiomas = consulta_bucle('SELECT * FROM idiomas WHERE codigo_idioma NOT IN (SELECT idioma_encabezado FROM lenguajes) ORDER BY popular, nombre_idioma ASC');
	?>
	<div id="formulario">
        <form action="php/procesador.php" method="post">
            <fieldset style="border:hidden">
                <p><strong>Primero selecciona el idioma del LENGUAJE que deseas instalar</strong></p>
                <div>
                
                <select name="idioma" class="idioma" size="1">
                <?php
                while($idioma = mysql_fetch_array($idiomas)){
                 echo '<option value="' . $idioma['codigo_idioma'] . '">' . utf8_encode($idioma['nombre_idioma']) . '</option>';
                }//fin while 
                ?>
                </select>
                <label>Idioma</label><br><br><br><br>
                
                <textarea cols="80" rows="10" class="ckeditor"></textarea>
                
                
            </fieldset>
        </form>
	</div>
	</body>
	</html>
    <?php
}//FIN if
else{
	header('Location: index.php?error=4');
}
?>