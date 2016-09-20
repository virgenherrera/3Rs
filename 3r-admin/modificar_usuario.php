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
	<title>ACTUALIZAR un:::&gt; usuario</title>
	</head>
	
    <body>
    <h2>en esta pagina puedes actualizar los datos del usuario que seleccionaste:<br>
	<script src="ckeditor/ckeditor.js"></script>
    <?php
	$consulta = "SELECT * FROM usuarios WHERE id_usuario = '" . $_POST['id_usuario'] . "'";
    $usuario = consulta_mysql($consulta);
	?>
    <form action="php/modificar_usuario.php" method="post">
   	  <fieldset>
        <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>" >

                
        <input type="text" class="nombre_usuario" name="nombre_usuario" value="<?php echo utf8_decode($usuario['nombre_usuario']); ?>" requiered>
        <label>Nombre</label><br>
        
        <input type="text" class="apellido_usuario" name="apellido_usuario" value="<?php echo utf8_decode($usuario['apellido_usuario']); ?>" requiered>
        <label>Apellido</label><br>
        
        <input type="text" class="email" name="email" value="<?php echo utf8_decode($usuario['email']); ?>" requiered>
        <label>email/nombre de usuario</label><br>
        
        <input name="clase_usuario" type="text" class="clase_usuario" value="<?php echo utf8_decode($usuario['clase_usuario']); ?>" readonly>
        <label>clase actual de usuario</label><br>
        
        <select name="clase_usuario2">
        	<option value="usuario" <?php if($usuario['clase_usuario'] == 'usuario'){echo 'selected="selected"';} ?>>Usuario</option>
          <option value="superusuario" <?php if($usuario['clase_usuario'] == 'superusuario'){echo 'selected="selected"';} ?>>SuperUsuario</option>
        </select>
        <label>Cambiar clase de usuario</label><br><br><hr>
        
        
        <P>Deseas Regenerar una contraseña segura para este usuario y que sea enviada a su email?</P>
        <select name="regenerar">
        	<option value="si">Si</option>
            <option value="no" selected="selected">No</option>
        </select><hr>
        
        <input type="submit" value="Editar Usuario">
      </fieldset>
    </form>
	</body>
	</html>
<?php
}
else{
	header('Location: index.php?error=4');
}