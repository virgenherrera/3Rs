<?php
function bring_header($pagina){//imprimir el header del Panel de Control
	
	switch ($pagina){
		case 'inicio': $pag = 'inicio'; break;
		case 'secciones' : $pag = 'secciones'; break;
		case 'secciones_ver' : $pag = 'Ver Secciones'; break;
		case 'secciones_mod' : $pag = 'Modificar Secciones'; break;
		case 'prod' : $pag = 'Productos'; break;
		case 'prod_ver' : $pag = 'Ver Productos'; break;
		case 'prod_agr' : $pag = 'Agregar un Producto'; break;
		case 'prod_elim' : $pag = 'Eliminar un Producto'; break;
		case 'prod_mod' : $pag = 'Modificar un Producto'; break;
		case 'serv' : $pag = 'Servicios'; break;
		case 'serv_ver' : $pag = 'Ver Servicios'; break;
		case 'serv_agr' : $pag = 'Agregar un Servicio'; break;
		case 'serv_elim' : $pag = 'Eliminar un Servicio'; break;
		case 'serv_mod' : $pag = 'Modificar un Servicio'; break;
		case 'lang' : $pag = 'Lenguajes'; break;
		case 'lang_ver' : $pag = 'Ver Lenguajes Instalados'; break;
		case 'lang_agr' : $pag = 'Instalar un Lenguaje'; break;
		case 'lang_elim' : $pag = 'Desinstalar un Lenguaje'; break;
		case 'lang_mod' : $pag = 'Modificar un Lenguaje'; break;
		case 'quail' : $pag = 'Usuarios'; break;
		case 'quail_ver' : $pag = 'Ver usuarios'; break;
		case 'quail_agr' : $pag = 'Agregar un Usuario'; break;
		case 'quail_elim' : $pag = 'Eliminar un Usuario'; break;
		case 'quail_mod' : $pag = 'Modificar un Usuario'; break;
		
	}
	?>
    <!DOCTYPE html>
    <html dir="ltr" lang="es-MX"><head>
        <meta charset="utf-8">
        <title>Panel Administrativo 3Rs de México</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="stylesheet" href="style.css" media="screen">
        <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
        <link rel="stylesheet" href="style.responsive.css" media="all">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Salsa|PT+Sans&amp;subset=latin">
    
        <script src="jquery.js"></script>
        <script src="script.js"></script>
        <script src="script.responsive.js"></script>
    
    
    
    <style>.art-content .art-postcontent-0 .layout-item-0 { margin-bottom: 10px;  }
    .art-content .art-postcontent-0 .layout-item-1 { border-spacing: 10px 0px; border-collapse: separate;  }
    .art-content .art-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#FFB3B3;border-right-color:#FFB3B3;border-bottom-color:#FFB3B3;border-left-color:#FFB3B3; color: #510000; background: #FDE3E7; padding-right: 10px;padding-left: 10px; border-radius: 15px;  }
    .ie7 .post .layout-cell {border:none !important; padding:0 !important; }
    .ie6 .post .layout-cell {border:none !important; padding:0 !important; }
    
    </style>
    </head>
    
    <body>
    <div id="art-main">
    <header class="art-header clearfix">
    
    
        <div class="art-shapes">
    <h1 class="art-headline" data-left="18.9%">
    <a href="http://3rsdemexico.com/" target="_blank">3r's de méxico</a>
    </h1>
    <h2 class="art-slogan" data-left="47.85%">Pánel Adminsitrativo</h2>
    
    
    </div>
    
                            
                        
    </header>
    <nav class="art-nav clearfix">
        <div class="art-nav-inner">
            <ul class="art-hmenu">
                <li><a href="panel-de-control.php?op=inicio">Inicio</a></li>
                <li><a href="panel-de-control.php?op=prod">Productos</a>
                    <ul>
                        <li><a href="panel-de-control.php?op=prod_ver">Ver Productos</a></li>
                        <li><a href="panel-de-control.php?op=prod_agr">Agregar Productos</a></li>
                        <li><a href="panel-de-control.php?op=prod_elim">Eliminar Productos</a></li>
                        <li><a href="panel-de-control.php?op=prod_mod">Modificar Productos</a></li>
                    </ul>
                </li>
                <li><a href="panel-de-control.php?op=serv">Servicios</a>
                    <ul>
                        <li><a href="panel-de-control.php?op=serv_ver">Ver Servicios</a></li>
                        <li><a href="panel-de-control.php?op=serv_agr">Agregar Servicios</a></li>
                        <li><a href="panel-de-control.php?op=serv_elim">Eliminar Servicios</a></li>
                        <li><a href="panel-de-control.php?op=serv_mod">Modificar Servicios</a></li>
                    </ul>
                </li>
                <li><a href="panel-de-control.php?op=lang">Lenguajes</a>
                    <ul>
                        <li><a href="panel-de-control.php?op=lang_ver">Ver Lenguajes Instalados</a></li>
                        <li><a href="panel-de-control.php?op=lang_agr">Agregar Lenguaje</a></li>
                        <li><a href="panel-de-control.php?op=lang_elim">Eliminar Lenguaje</a></li>
                        <li><a href="panel-de-control.php?op=lang_mod">Modificar Lenguaje</a></li>
                    </ul>
                </li>
    <?php
    if(isset($_SESSION['3rs_mexico']) and !empty($_SESSION['3rs_mexico']) and $_SESSION['3rs_mexico'] == 'superusuario'){//funcionalidad solo Para Super Usuarios
        ?>
        <li><a href="panel-de-control.php?op=quail">Usuarios</a>
                    <ul>
                        <li><a href="panel-de-control.php?op=quail_ver">Ver Usuarios</a></li>
                        <li><a href="panel-de-control.php?op=quail_agr">Agregar Usuarios</a></li>
                        <li><a href="panel-de-control.php?op=quail_elim">Eliminar Usuarios</a></li>
                        <li><a href="panel-de-control.php?op=quail_mod">Modificar Usuarios</a></li>
                    </ul>
                </li>
        <?php
    }
    ?>
                <li><a href="index.php?op=logout">Cerrar Sesion</a></li>
            </ul> 
            </div>
        </nav>
    <div class="art-sheet clearfix">
                <div class="art-layout-wrapper clearfix">
                    <div class="art-content-layout">
                        <div class="art-content-layout-row">
<div class="art-layout-cell art-sidebar1 clearfix">
    <div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
        	<h3 class="t">Mensajes</h3>
            <h3>
            <?php
			if(isset($_GET['msg']) && !empty($_GET['msg'])){
				switch($_GET['msg']){
					case 'qs_lang_succ'	:echo 'Se instalo correctamente el nuevo idioma a la seccion <b>Quienes Somos</b>'; break;
					case 'ca_lang_succ'	:echo 'Se instalo correctamente el nuevo idioma a la seccion <b>Crear Alianza</b>'; break;
					case 'ps_lang_succ'	:echo 'Se instalo correctamente el nuevo idioma a las secciones <b>Productos y Servicios</b>'; break;
					case 'cn_lang_succ'	:echo 'Se instalo correctamente el nuevo idioma a la seccion <b>Contacto</b>'; break;
					case 'he_lang_succ'	:echo 'Se instalo correctamente el nuevo idioma al <b>Encabezado</b>'; break;
					case 'er_lang_succ'	:echo 'surgio un error durante la instalacion del lenguaje'; break;
					case 'del_prod_succ': echo 'Se ha eliminado exitosamente el producto del sistema'; break;
					case 'del_serv_succ': echo 'Se ha eliminado exitosamente el Servicio del sistema'; break;
					case 'elim_lang_qs': echo 'Se ha eliminado exitosamente el LENGUAJE de la pagina Quienes Somos'; break;
					case 'er_lang_qs': echo 'error al tratar de eliminar el LENGUAJE de la pagina Quienes Somos'; break;
					case 'elim_lang_ca': echo 'Se ha eliminado exitosamente el LENGUAJE de la pagina Crear Alianza'; break;
					case 'er_lang_ca': echo 'error al tratar de eliminar el LENGUAJE de la pagina Crear Alianza'; break;
					case 'elim_lang_ps': echo 'Se ha eliminado exitosamente el LENGUAJE de las paginas Productos y Servicios'; break;
					case 'er_lang_ps': echo 'error al tratar de eliminar el LENGUAJE de las paginas Productos y Servicios'; break;
					case 'elim_lang_co': echo 'Se ha eliminado exitosamente el LENGUAJE de la pagina Contacto'; break;
					case 'er_lang_co': echo 'error al tratar de eliminar el LENGUAJE de la pagina contacto'; break;
					case 'elim_lang_en': echo 'Se ha eliminado exitosamente el LENGUAJE del Encabezado'; break;
					case 'er_lang_en': echo 'error al tratar de eliminar el LENGUAJE del Encabezado'; break;
					case 'del_user_succ': echo 'Se ha eliminado exitosamente el USUARIO'; break;
					case 'user_succ' : echo 'Se ha agregregado el USUARIO exitosamente'; break;
					case 'prod_ed_succ' : echo 'El producto se ha actualizado exitosamente'; break;
					case 'prod_ed_serv' : echo 'El servicio se ha actualizado exitosamente'; break;
					case 'qs_lang_upd' :	echo 'El Lenguaje de la Pagina QUIENES SOMOS fue actualizado exitosamente<br>';
											echo '<a href="../index.php" target="_blank">Clic Aqui para ver los cambios</a>';
											break;
					case 'ca_lang_upd' : 	echo 'El Lenguaje de la Pagina CREAR ALIANZA fue actualizado exitosamente<br>';
											echo '<a href="../crear-alianza.php" target="_blank">Clic Aqui para ver los cambios</a>';
											break;
					case 'ps_lang_upd' :	echo 'El Lenguaje de las Paginas PRODUCTOS y SERVICIOS fueron actualizados exitosamente<br>';
											echo '<a href="../productos.php" target="_blank">Clic Aqui para ver los cambios</a><br>';
											echo '<a href="../servicios.php" target="_blank">Clic Aqui para ver los cambios</a>';
											break;
					case 'co_lang_upd' :	echo 'El Lenguaje de la Pagina CONTACTO fue actualizado exitosamente<br>';
											echo '<a href="../contacto.php" target="_blank">Clic Aqui para ver los cambios</a>';
											break;
					case 'he_lang_upd' :	echo 'El Lenguaje del ENCBEZADO fue actualizado exitosamente<br>';
											echo '<a href="../index.php" target="_blank">Clic Aqui para ver los cambios</a>';
											break;
					case 'er_lang_upd' :	echo 'error al tratar de actualizar el LENGUAJE';
											break;
					case 'upd_user_succ':	echo 'se ha actualizado correctamente la informacion del usuario';
											break;
					case 'upd_user_fail':	echo 'Fallo al intentar actualiar la informacion del usuario';
											break;
					
				}//fin Switch mensajes
			}//fin if
			?>
            </h3>
        </div>
        <div class="art-vmenublockheader">
            <h3 class="t">Menu Vertical</h3>
        </div>
        <div class="art-vmenublockcontent">
            <ul class="art-vmenu">
                <li><a href="panel-de-control.php?op=inicio" >Inicio</a></li>
                <li><a href="panel-de-control.php?op=prod">Productos</a></li>
                <li><a href="panel-de-control.php?op=serv">Servicios</a></li>
                <li><a href="panel-de-control.php?op=lang">Idiomas</a></li>
				<?php
                    if(isset($_SESSION['3rs_mexico']) and !empty($_SESSION['3rs_mexico']) and $_SESSION['3rs_mexico'] == 'superusuario'){//funcionalidad solo Para Super Usuarios
                ?>
                <li><a href="panel-de-control.php?op=quail">Usuarios</a></li>
                <?php
				}
				?>
                <li><a href="index.php?op=logout">Cerrar Sesion</a></li>
            </ul>
		</div>
    </div>
</div>
<div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
        <h2 class="art-postheader"><?php echo $pag; ?></h2>
                        
        <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
    <div class="art-content-layout layout-item-1">
        <div class="art-content-layout-row">
        <div class="art-layout-cell layout-item-2" style="width: 100%" >
    <?php
}//FIN bring_header()

function bring_footer(){//imprimir el FOOTER del Panel de Control
	?>
    </div>
        </div>
    </div>
    </div>
    </div>
    </article></div>
                        </div>
                    </div>
                </div>
        </div>
    <footer class="art-footer clearfix">
      <div class="art-footer-inner">
    <p><a href="panel-de-control.php?op=inicio">Inicio</a> | <a href="panel-de-control.php?op=prod">Productos</a> | <a href="panel-de-control.php?op=serv">Servicios</a> | <a href="panel-de-control.php?op=lang">Lenguajes</a> | 
<?php if(isset($_SESSION['3rs_mexico']) and !empty($_SESSION['3rs_mexico']) and $_SESSION['3rs_mexico'] == 'superusuario'){
	//funcionalidad solo Para Super Usuarios
	echo '<a href="panel-de-control.php?op=quail">Usuarios</a> | ';
}?>
    
    <a href="panel-de-control.php?op=logout">Cerrar Sesion</a></p><hr>
    <p>Panel Administrativo&nbsp;</p>
    <p>Tapalpa Webs Copyright © 2012. Reservados todos los derechos.</p>
        <p class="art-page-footer">
            <span id="art-footnote-links">Designed by <a href="http://www.tapalpawebs.com/" target="_blank">Hugo_Enrique@TapalpaWebs</a>.</span>
            
        </p>
      </div>
    </footer>
    
    </div>
    
    
    </body>
    </html>
    <?php
}//FIN bring_footer()

//esta funcion sirve para hacer una consulta a la bdds
function consulta_mysql($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include '../php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
	
	//convertir MYSQL query en array
	$valor_regresado = mysql_fetch_array($registro) or die("error al convertir consulta MYSQL en array");
	//valor que regresa esta funcion
	return $valor_regresado;
}//<--fin consulta_mysql()

//esta funcion sirve para hacer una consulta reiterativa a la bdds
function consulta_bucle($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include '../php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
	
	//valor que regresa esta funcion
	return $registro;
}//<--fin consulta_mysql()

//esta funcion sirve para nsertar un registro a la dbbs
function insertar_mysql($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include '../php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
	
}//FIN insertar_mysql()

function ver_productos(){
	$productos = consulta_bucle('SELECT * FROM productos');
	while($producto = mysql_fetch_array($productos)){
		?>
        <h3><?php echo utf8_decode($producto['nombre_producto']); ?></h3>
                <div>
                    <img src="../images/productos/<?php echo utf8_decode($producto['imagen_producto']); ?>" width="160" height="107">
                    <p><?php echo utf8_decode($producto['descripcion_producto']); ?></p><hr>
                </div>
        <?php
	}//fin While
}//fin ver_productos()

function ver_servicios(){
	$servicios = consulta_bucle('SELECT * FROM servicios');
	while($servicio = mysql_fetch_array($servicios)){
		?>
        <h3><?php echo utf8_decode($servicio['nombre_servicio']); ?></h3>
                <div>
                    <p><?php echo utf8_decode($servicio['descripcion_servicio']); ?></p><br><hr>
                </div>
        <?php
	}//fin while
}//Fin ver_servicios()

function ver_lenguajes(){
	?>
	<h3>A estas secciones se les han instalado los siguientes lenguajes:</h3>
	<ul>
    	<li>Quienes Somos
        	<ul>
            	<li>
					<?php
                    $lenguajes = listar_lenguajes('quienes_somos');
                    foreach($lenguajes as $lenguaje){
                        echo '<li>' . $lenguaje . '</li>';
                    }
                    ?>
                </li>
            </ul>
        </li>
        <li>Crear Alianza
        	<ul>
            	<li>
					<?php
                    $lenguajes = listar_lenguajes('crear_alianza');
                    foreach($lenguajes as $lenguaje){
                        echo '<li>' . $lenguaje . '</li>';
                    }
                    ?>
                </li>
            </ul>
        </li>
        <li>Productos y Servicios
        	<ul>
            	<li>
					<?php
                    $lenguajes = listar_lenguajes('pagina_productos');
                    foreach($lenguajes as $lenguaje){
                        echo '<li>' . $lenguaje . '</li>';
                    }
                    ?>
                </li>
            </ul>
        </li>
        <li>Contacto
        	<ul>
            	<li>
					<?php
                    $lenguajes = listar_lenguajes('contacto');
                    foreach($lenguajes as $lenguaje){
                        echo '<li>' . $lenguaje . '</li>';
                    }
                    ?>
                </li>
            </ul>
        </li>
        <li>Encabezado
        	<ul>
            	<li>
					<?php
                    $lenguajes = listar_lenguajes('encabezado');
                    foreach($lenguajes as $lenguaje){
                        echo '<li>' . $lenguaje . '</li>';
                    }
                    ?>
                </li>
            </ul>
        </li>
    </ul>

	<?php
}//fin ver_lenguajes()

function ver_usuarios(){
	echo 'Usuarios de Este Panel Administrativo';
	$usuarios = consulta_bucle('SELECT * FROM usuarios');
	while($usuario = mysql_fetch_array($usuarios)){
		?>
		<div>
        <h2>Nombre:</h2>
        <p><?php echo utf8_decode($usuario['nombre_usuario']); ?> <?php echo utf8_decode($usuario['apellido_usuario']); ?></p>
        <h2>nombre de usuario/email:</h2>
        <p><?php echo utf8_decode($usuario['email']); ?></p>
        <h2>Clase de Usuario:</h2>
        <?php echo utf8_decode($usuario['clase_usuario']); ?></div><br><hr>
		<?php
	}//fin while
}//fin Ver usuarios

function agregar_producto(){//esta funcion sirve para agregar un producto a la bdd's

	$idiomas = consulta_bucle('SELECT * FROM idiomas ORDER BY  popular, nombre_idioma ASC');
	?>

	<div id="formulario">
    		<form action="php/procesador.php" method="post" enctype="multipart/form-data">
                <fieldset style="border:hidden">
                    <p><strong>Primero selecciona el idioma del producto que deseas publicar</strong></p>
                    <div>
                    
                    <select name="idioma" class="idioma" size="1">
                    <?php
                    while($idioma = mysql_fetch_array($idiomas)){
                     echo '<option value="' . $idioma['codigo_idioma'] . '">' . utf8_encode($idioma['nombre_idioma']) . '</option>';
                    }//fin while 
                    ?>
                    </select>
                    <label>Idioma</label><br>
                    
                    <input name="nombre_producto" class="nombre_producto" type="text" required><br>
                    <label>Nombre del Producto (Debe coincidir con el idioma seleccionado)</label><br>
                    
                    <textarea name="descripcion_producto" class="descripcion_producto" required></textarea><br>
                    <label>Descripcion del Producto</label><br>
                    
                    <input name="imagen_producto" class="imagen_producto" type="file"><br>
                    <label>Selecciona en tu computadora la imagen que<br>corresponde con el producto a agragar</label><br>
                    <br>
                    <br>
                    <div class="ultimo">
                        <img src="images/preloader-01.gif" class="ajaxgif hide" />
                        <div class="msg"></div>
                        <!--<button class="agregar_producto">Agregar Producto</button>-->
                        <input type="submit" value="Agregar Producto">
                    </div>
                </fieldset>
            </form>
</div>
    <!--<script src="js/jquery-1.8.3.min.js"></script>
	<script>
    	$(document).on('ready',function(){
			$('.agregar_producto').on('click',function(){
				//
				//asignacion de variables
				var idioma					=	$('.idioma').val();
					nombre_producto			=	$('.nombre_producto').val();
					descripcion_producto	=	$('.descripcion_producto').val();
					imagen_producto			=	$('.imagen_producto').val();
					
				//validar que los datos del formulario no esten vacios y hacer focus() en el que este vacio
				if (idioma == "") {
					$('.idioma').focus();
				return false;
				}
				else if (nombre_producto == "") {
					$('.nombre_producto').focus();
				}
				else if (descripcion_producto == "") {
					$('.descripcion_producto').focos();
				}
				else if (imagen_producto == "") {
					$('.imagen_producto').focus();
				}
				//en el else va el AJAX
				else {
					$('.ajaxgif').removeClass('hide');
					var datos = '&idioma=' + idioma +
								'&nombre_producto=' + nombre_producto +
								'&descripcion_producto=' + descripcion_producto +
								'&imagen_producto=' + imagen_producto;
					$.ajax({
						type: POST,
						url: 'php/agregar_producto.php',
						data: datos,
						success: function(){
							$('.ajaxgif').hide();
							$('.msg').text('Producto Registrado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);
						},
						error: function(){
							$('.ajaxgif').hide();
							$('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);
						}
					}); //FIN AJAX
					return false;
				}
			})
		})
    </script>-->
	<?php
}//FIN agregar_producto()

function agregar_servicio(){//esta funcion sirve para agregar un servicio a la bdd's
	

	$idiomas = consulta_bucle('SELECT * FROM idiomas ORDER BY  popular, nombre_idioma ASC');
	?>

	<div id="formulario">
    		<form action="php/procesador.php" method="post">
                <fieldset style="border:hidden">
                    <p><strong>Primero selecciona el idioma del SERVICIO que deseas publicar</strong></p>
                    <div>
                    
                    <select name="idioma" class="idioma" size="1">
                    <?php
                    while($idioma = mysql_fetch_array($idiomas)){
                     echo '<option value="' . $idioma['codigo_idioma'] . '">' . utf8_encode($idioma['nombre_idioma']) . '</option>';
                    }//fin while 
                    ?>
                    </select>
                    <label>Idioma</label><br>
                    
                    <input name="nombre_servicio" class="nombre_servicio" type="text" required><br>
                    <label>Nombre del Producto (Debe coincidir con el idioma seleccionado)</label><br>
                    
                    <textarea name="descripcion_servicio" class="descripcion_servicio" required></textarea><br>
                    <label>Descripcion del Producto</label><br>
                    <br>
                    <br>
                    <div class="ultimo">
                        <img src="images/preloader-01.gif" class="ajaxgif hide" />
                        <div class="msg"></div>
                        <!--<button class="agregar_producto">Agregar Producto</button>-->
                        <input type="submit" value="Agregar Servicio">
                    </div>
                </fieldset>
            </form>
</div>
	<?php
}//FIN agregar_servicio()

function agregar_lenguaje(){
	?>
    <h3>selecciona la seccion a la cual deseas agregar un nuevo lenguaje</h3>
    <p>NOTA: si deseas intalar un nuevo lenguaje para todo el sitio es altamente recomendo que lo hagas en el siguiente orden:</p>
    <ol>
    	<li><a href="instalar-idioma-qs.php">Quienes Somos</a></li>
        <li><a href="instalar-idioma-crearalianza.php">Crear Alianza</a></li>
        <li><a href="instalar-idioma-prod_serv.php">Productos y Servicios</a></li>
        <li><a href="instalar-idioma-contacto.php">Contacto</a></li>
        <li><a href="instalar-idioma-header.php">Encabezado</a></li>
    </ol>
    <?php
}//FIN agregar_lenguaje

function agregar_usuario(){//esta funcion sirve para agregar usuarios al panel de control
	?>
<form action="php/procesador.php" method="post">
                <fieldset style="border:hidden; text-align:left">
                    <input class="nombre_usuario" name="nombre_usuario" type="text" requiered><br>
                    <label>Ingresa el(los) NOMBRE(S) del nuevo usuario</label><br>
                    
                    <input class="apellido_usuario" name="apellido_usuario" type="text" required><br>
                    <label>Ingresa el(los) APELLIDO(S) del nuevo usuario</label>
                    
                    <input class="usuario" name="usuario" type="email" required><br>
                    <label>Ingresa el email de nuevo usuario</label><br>
                    
                    <select select="clase" name="clase">
                    	<option value="usuario">Usuario</option>
                        <option value="superusuario">SuperUsuario</option>
                    </select>
                    <label>Selecciona el tipo de usuario</label>

                    <input type="submit" value="Agregar Usuario">

                </fieldset>
            </form>
    <?php
}

function eliminar_producto(){
	$consulta = 'SELECT * FROM productos';
$productos = consulta_bucle($consulta);
?>
<h3>Estos son los PRODUCTOS actualmente instalados</h3>
	<?php
    while($producto = mysql_fetch_array($productos)){
        echo '<h3>id del producto: ' . $producto['id_producto'] . '</h3>';
        echo '<p>Idioma: ' . utf8_decode($producto['idioma']) . '<br>Nombre: ' . utf8_decode($producto['nombre_producto']) . '<br>Descripcion:';
        echo utf8_decode($producto['descripcion_producto']) . '<br>Imagen: <img src="../images/productos/' . $producto['imagen_producto'] . '" width="160" height="107" ></p><hr>';
    }//FIN while
    ?>
    <br><hr>
    <h3>Selecciona el PRODUCTO que deseas ELIMINAR</h3>
    <form action="php/eliminar_producto.php" method="post" enctype="application/x-www-form-urlencoded">
        <fieldset>            
            <select name="id_producto" class="idioma_prod" id="id_producto">
                <?php
                $productos = consulta_bucle($consulta);
                while($producto = mysql_fetch_array($productos)){
                    echo '<option value="' . $producto['id_producto'] . '">' . $producto['id_producto'] . '</option>';
                }//fin while productos
                ?>            
            </select>
            <label>Selecciona el ID del producto que deseas ELIMINAR</label><br>            
            <input name="enviar" type="submit" id="enviar" onclick="return confirm('¿Estás seguro que deseas eliminar este PRODUCTO?')" value="Eliminar Producto">
            
        </fieldset>
    </form>
<?php
}//fin_eliminar_producto

function eliminar_servicio(){
	$consulta = 'SELECT * FROM servicios';
	$servicios = consulta_bucle($consulta);
	?>
	<h3>Estos son los SERVICIOS actualmente instalados</h3>
	<?php
    while($servicio = mysql_fetch_array($servicios)){
        echo '<h3>id del servicio: ' . $servicio['id_servicio'] . '</h3>';
        echo '<p>Idioma: ' . utf8_decode($servicio['idioma']) . '<br>Nombre: ' . utf8_decode($servicio['nombre_servicio']) . '<br>Descripcion:';
        echo utf8_decode($servicio['descripcion_servicio']) . '</p><hr>';
    }//FIN while
    ?>
    <br><hr>
    <h3>Selecciona el SERVICIO que deseas ELIMINAR</h3>
<form action="php/eliminar_servicio.php" method="post" enctype="application/x-www-form-urlencoded">
        <fieldset>            
            <select name="id_servicio" class="idioma_servicio" id="id_servicio">
                <?php
                $servicios = consulta_bucle($consulta);
                while($servicio = mysql_fetch_array($servicios)){
                    echo '<option value="' . $servicio['id_servicio'] . '">' . $servicio['id_servicio'] . '</option>';
                }//fin while idiomas
                ?>            
            </select>
            <label>Selecciona el ID del servicio que deseas ELIMINAR</label><br>            
            <input name="enviar" type="submit" id="enviar" onclick="return confirm('¿Estás seguro que deseas eliminar este SERVICIO?')" value="Eliminar Servicio">
            
        </fieldset>
    </form>
<?php
}//fin_eliminar_producto

function eliminar_lenguaje(){
	ver_lenguajes();
	?>
    <hr>
    <h3>selecciona la seccion a la cual deseas desinstalar un lenguaje</h3>
    <p>NOTA: si desinstalas un lenguaje ese se borrara para siempre</p>
    <ol>
    	<li><a href="eliminar-idioma-qs.php">Quienes Somos</a></li>
        <li><a href="eliminar-idioma-crearalianza.php">Crear Alianza</a></li>
        <li><a href="eliminar-idioma-prod_serv.php">Productos y Servicios</a></li>
        <li><a href="eliminar-idioma-contacto.php">Contacto</a></li>
        <li><a href="eliminar-idioma-header.php">Encabezado</a></li>
    </ol>
    <?php
}//FIN agregar_lenguaje

function eliminar_usuario(){
	$consulta = 'SELECT * FROM usuarios';
	$usuarios = consulta_bucle($consulta);
	?>
	<h3>Estos son los USUARIOS que pueden acceder al panel administrativo</h3>
	<?php
    while($usuario = mysql_fetch_array($usuarios)){
        echo '<h3>id del usuario: ' . $usuario['id_usuario'] . '</h3>';
        echo '<p>Nombre: ' . utf8_decode($usuario['nombre_usuario']) . '<br>Apellido: ' . utf8_decode($usuario['apellido_usuario']);
        echo '<br>email: ' . $usuario['email'];
		echo '<br>Tipo de Usuario: <b>' . $usuario['clase_usuario'] . '</b></p><hr>';
    }//FIN while
    ?>
    <br><hr>
    <h3>Selecciona el USUARIO que deseas ELIMINAR</h3>
<form action="php/eliminar_usuario.php" method="post" enctype="application/x-www-form-urlencoded">
        <fieldset>            
            <select name="id_usuario" class="id_usuario" id="id_usuario">
                <?php
                $usuarios = consulta_bucle($consulta);
                while($usuario = mysql_fetch_array($usuarios)){
                    echo '<option value="' . $usuario['id_usuario'] . '">' . $usuario['email'] . '</option>';
                }//fin while idiomas
                ?>            
            </select>
            <label>Selecciona el email del usuario que deseas ELIMINAR</label><br>            
            <input name="enviar" type="submit" id="enviar" onclick="return confirm('¿Estás seguro que deseas eliminar este USUARIO?')" value="Eliminar Usuario">
            
        </fieldset>
    </form>
<?php
}

function modificar_producto(){
	$productos = consulta_bucle('SELECT * FROM productos');
	?>
    <h3>Estos son los productos que puedes editar</h3>
    <?php
	while($producto = mysql_fetch_array($productos)){
        echo '<h3>id del producto: ' . $producto['id_producto'] . '</h3>';
        echo '<p>Idioma: ' . utf8_decode($producto['idioma']) . '<br>Nombre: ' . utf8_decode($producto['nombre_producto']) . '<br>Descripcion:';
        echo utf8_decode($producto['descripcion_producto']) . '<br>Imagen: <img src="../images/productos/' . $producto['imagen_producto'] . '" width="160" height="107"></p><hr>';
    }//FIN while
	?>
<form action="editar_producto.php" method="post" enctype="application/x-www-form-urlencoded">
        <fieldset>            
            <select name="id_producto" class="idioma_prod" id="id_producto">
                <?php
                $productos = consulta_bucle('SELECT * FROM productos');
                while($producto = mysql_fetch_array($productos)){
                    echo '<option value="' . $producto['id_producto'] . '">' . $producto['id_producto'] . '</option>';
                }//fin while productos
                ?>            
            </select>
            <label>Selecciona el ID del producto que deseas EDITAR</label><br>            
            <input name="enviar" type="submit" id="enviar" value="Editar Producto">
            
        </fieldset>
    </form>
    <?php
}

function modificar_servicio(){
	$servicios = consulta_bucle('SELECT * FROM servicios');
	?>
<h3>Estos son los servicios que puedes editar</h3>
    <?php
	while($servicio = mysql_fetch_array($servicios)){
        echo '<h3>id del servicio: ' . $servicio['id_servicio'] . '</h3>';
        echo '<p>Idioma: ' . utf8_decode($servicio['idioma']) . '<br>Nombre: ' . utf8_decode($servicio['nombre_servicio']) . '<br>Descripcion:';
        echo utf8_decode($servicio['descripcion_servicio']) . '</p><hr>';
    }//FIN while
	?>
     <form action="editar_servicio.php" method="post">
        <fieldset>            
            <select name="id_servicio" class="idioma_serv" id="id_servicio">
                <?php
                $servicios = consulta_bucle('SELECT * FROM servicios');
                while($servicio = mysql_fetch_array($servicios)){
                    echo '<option value="' . $servicio['id_servicio'] . '">' . $servicio['id_servicio'] . '</option>';
                }//fin while servicios
                ?>            
            </select>
            <label>Selecciona el ID del servicio que deseas EDITAR</label><br>            
            <input name="enviar" type="submit" id="enviar" value="Editar Servicio">
            
        </fieldset>
    </form>
    <?php
}

function modificar_lenguaje(){
	?>
<h3>selecciona la seccion a la cual deseas actualizar su lenguaje</h3>
    <form action="editar_idioma.php" method="post">
    	<fieldset>
        	<select name="pagina">
            	<option value="actualizar-idioma-qs.php">Quienes Somos</option>
                <option value="actualizar-idioma-crearalianza.php">Crear Alianza</option>
                <option value="actualizar-idioma-prod_serv.php">Productos y Servicios</option>
                <option value="actualizar-idioma-contacto.php">Contacto</option>
                <option value="actualizar-idioma-header.php">Encabezado</option>
            </select>
            <label>Selecciona la Pagina que deseas ACTUALIZAR</label><br><br>
            <select name="idioma">
			<?php
			$lenguajes = consulta_bucle('SELECT * FROM lenguajes');
			while($lenguaje = mysql_fetch_array($lenguajes)){
				echo '<option value="' . $lenguaje['idioma_encabezado'] . '">' . utf8_encode($lenguaje['nombre_lenguaje']) . '</option>';
			}//fin while
			?>
            </select>
            <label>Selecciona el Idioma que deseas Actualizar</label><br><br>
            
            <input type="submit" value="Editar Seccion">
            
        </fieldset>
    </form>
    

    <?php
}//FIN agregar_lenguaje

function editar_usuario(){
	$consulta = 'SELECT * FROM usuarios';
	$usuarios = consulta_bucle($consulta);
	?>
	<h3>Estos son los USUARIOS que pueden acceder al panel administrativo</h3>
	<?php
    while($usuario = mysql_fetch_array($usuarios)){
        echo '<h3>id del usuario: ' . $usuario['id_usuario'] . '</h3>';
        echo '<p>Nombre: ' . utf8_decode($usuario['nombre_usuario']) . '<br>Apellido: ' . utf8_decode($usuario['apellido_usuario']);
        echo '<br>email: ' . $usuario['email'];
		echo '<br>Tipo de Usuario: <b>' . $usuario['clase_usuario'] . '</b></p><hr>';
    }//FIN while
    ?>
    <br><hr>
    <h3>Selecciona el USUARIO que deseas MODIFICAR</h3>
<form action="modificar_usuario.php" method="post" enctype="application/x-www-form-urlencoded">
        <fieldset>            
            <select name="id_usuario" class="id_usuario" id="id_usuario">
                <?php
                $usuarios = consulta_bucle($consulta);
                while($usuario = mysql_fetch_array($usuarios)){
                    echo '<option value="' . $usuario['id_usuario'] . '">' . $usuario['email'] . '</option>';
                }//fin while idiomas
                ?>            
            </select>
            <label>Selecciona el email del usuario que deseas EDITAR</label><br>            
            <input name="enviar" type="submit" id="enviar" value="Editar Usuario">
            
        </fieldset>
    </form>
<?php
}

function listar_lenguajes($nombre_tabla_seccion){
	//A esta funcion le pasas el nombre de la tabla y te devuelve un array con los lenguajes que contiene si es que los tiene
	$consulta = 'SELECT DISTINCT idioma FROM ' . $nombre_tabla_seccion;
	$idiomas = consulta_bucle($consulta);
	$indice = 0;
	while ($idioma = mysql_fetch_array($idiomas)){
		$consulta = 'SELECT nombre_idioma FROM idiomas WHERE codigo_idioma = "' . $idioma['idioma'] . '"';
		$lenguaje = consulta_mysql($consulta);
		//crear el array
		$valor_regresado[$indice] = utf8_encode($lenguaje['nombre_idioma']);
		$indice++;
	}
	return $valor_regresado;
}//FIN listar_lenguajes()


?>