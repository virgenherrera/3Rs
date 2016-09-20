<?php
session_start();

include_once 'php/funciones.php';
//verificar que el usuario se haya logueado
if(isset($_SESSION['3rs_mexico'])){
	
	if(isset($_GET['op']) and !empty($_GET['op'])){//decidir a que seccion del panel de control vá el usuario
		$seccion = $_GET['op'];
	}
	else{//asignar un valor por default a la seccion para que siempre haya un header
		$seccion = 'inicio';
	}
	
	//imprimir el encabezado del panel administrativo
	echo bring_header($seccion);
	
	//imprimir cuerpo de panel administrativo segun sea el caso
	switch ($seccion){
		case 'inicio': 	
							if(isset($_GET['usuario']) and !empty($_GET['usuario'])){
							$consulta = 'SELECT * FROM usuarios WHERE id_usuario = "' . $_GET['usuario'] . '"';
							$consulta = consulta_mysql($consulta);
							echo ' Hola <b>' . $consulta['nombre_usuario'] . ' ' . $consulta['apellido_usuario'] . '</b> Bienvenido al Panel 								Administrativo de 3Rs de Mexico';
							}
							elseif(isset($_GET['msg']) && !empty($_GET['msg']) && $_GET['msg'] == 'prod_succ'){
								echo '<b><i>Se ha agregregado el PRODUCTO exitosamente</b></i>';
							}
							elseif(isset($_GET['msg'])	&& !empty($_GET['msg'])	&& $_GET['msg'] == 'serv_succ'){
								echo '<b><i>Se ha agregregado el SERVICIO exitosamente</b></i>';
							}
							elseif(isset($_GET['msg'])	&& !empty($_GET['msg'])	&& $_GET['msg'] == 'user_succ'){
								echo '<b><i>Se ha agregregado el USUARIO exitosamente</b></i>';
							}
							else{ echo 'Panel Administrativo de 3Rs de Mexico';}
							break;//fin Caso INICIO
						 

		case 'prod' : 
						echo 'en esta seccion puedes: <br>';
						?>
						<ul>
							<li><a href="panel-de-control.php?op=prod_ver">Ver Productos</a></li>
							<li><a href="panel-de-control.php?op=prod_agr">Agregar Productos</a></li>
							<li><a href="panel-de-control.php?op=prod_elim">Eliminar Productos</a></li>
							<li><a href="panel-de-control.php?op=prod_mod">Modificar Productos</a></li>
						</ul>
						<?php
						break; //fin Caso prod						
		case 'prod_ver' : echo ver_productos(); break;		
		case 'prod_agr' : echo agregar_producto(); break;		
		case 'prod_elim' : echo eliminar_producto(); break;
		case 'prod_mod' : echo modificar_producto(); break;
		
		case 'serv' : 
		echo 'en esta seccion puedes <br>';
		?>
        <ul>
            <li><a href="panel-de-control.php?op=serv_ver">Ver Servicios</a></li>
            <li><a href="panel-de-control.php?op=serv_agr">Agregar Servicios</a></li>
            <li><a href="panel-de-control.php?op=serv_elim">Eliminar Servicios</a></li>
            <li><a href="panel-de-control.php?op=serv_mod">Modificar Servicios</a></li>
        </ul
        ><?php
		break; //fin caso serv
		
		case 'serv_ver' : echo ver_servicios(); break;
		case 'serv_agr' : echo agregar_servicio(); break;
		case 'serv_elim' : echo eliminar_servicio(); break;
		case 'serv_mod' : echo modificar_servicio(); break;
		case 'lang' : 
		echo 'en esta seccion puedes <br>';
		?>
        <ul>
            <li><a href="panel-de-control.php?op=lang_ver">Ver Idiomas</a></li>
            <li><a href="panel-de-control.php?op=lang_agr">Agregar Idiomas</a></li>
            <li><a href="panel-de-control.php?op=lang_elim">Eliminar Idiomas</a></li>
            <li><a href="panel-de-control.php?op=lang_mod">Modificar Idiomas</a></li>
        </ul>
        <?php
		break;//fin caso lang
		
		case 'lang_ver' : ver_lenguajes(); break;
		case 'lang_agr' : agregar_lenguaje(); break;
		case 'lang_elim' : eliminar_lenguaje(); break;
		case 'lang_mod' : echo modificar_lenguaje(); break;
		case 'quail' : 
		echo 'en esta seccion puedes <br>';
		?>
        <ul>
            <li><a href="panel-de-control.php?op=quail_ver">Ver Usuarios</a></li>
            <li><a href="panel-de-control.php?op=quail_agr">Agregar Usuarios</a></li>
            <li><a href="panel-de-control.php?op=quail_elim">Eliminar Usuarios</a></li>
            <li><a href="panel-de-control.php?op=quail_mod">Modificar Usuarios</a></li>
        </ul>
        <?php
		break; // fin caso quail
		
		case 'quail_ver' :	echo ver_usuarios(); break;
		case 'quail_agr' : echo agregar_usuario(); break;
		case 'quail_elim' : echo eliminar_usuario(); break;
		case 'quail_mod' : echo editar_usuario(); break;
		
	}
	
	
	//Imprimir el Footer del panel administrativo
	echo bring_footer();

}
else{
	header('Location: index.php?error=4');
}
?>