<?php
function imprimir_header(){
	session_start();

	if(!isset($_SESSION['idioma']) || empty($_SESSION['idioma'])){
		$_SESSION['idioma'] = determinar_idioma('es');
	}
	$idioma = $_SESSION['idioma'];
	$links_header = consulta_mysql("SELECT * FROM encabezado WHERE idioma = '" . $idioma . "'");
	?>
    <!DOCTYPE html>
	<html dir="ltr" lang="es-MX"><head>
    <meta charset="utf-8">
    <title>3R's de México :: Gestión Reciclado y Transformación de Residuos</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
	<meta name="description" content="Descripcion_aqui">
	<meta name="keywords" content="Keywords_aqui">

    <!--estilo contenedor de acordiones-->
    <link rel="stylesheet" href="css/contenedor_accordion.css" />
    <!--FIN estilo contenedor de acordiones-->
    
    <!--Funcionalidad Accordion-->
    <link rel="stylesheet" href="js/accordion/jquery-ui.css" />
    <script src="js/accordion/jquery-1.8.2.js"></script>
    <script src="js/accordion/jquery-ui.js"></script>
    <script src="js/accordion/accordion.js"></script>
    <!--FIN funcionalidad accordion-->
    
	<style>.Tw3rs-content .Tw3rs-postcontent-0 .layout-item-0 { margin-bottom: 5px;  }
    .Tw3rs-content .Tw3rs-postcontent-0 .layout-item-1 { border-spacing: 10px 0px; border-collapse: separate;  }
    .Tw3rs-content .Tw3rs-postcontent-0 .layout-item-2 { border-top-style:dashed;border-right-style:dashed;border-bottom-style:dashed;border-left-style:dashed;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#CCCCCC;border-right-color:#CCCCCC;border-bottom-color:#CCCCCC;border-left-color:#CCCCCC; padding-right: 25px;padding-left: 25px; border-radius: 10px;  }
    .ie7 .post .layout-cell {border:none !important; padding:0 !important; }
    .ie6 .post .layout-cell {border:none !important; padding:0 !important; }
    
    </style>
    <link type="text/css" rel="stylesheet" href="css/estilo_Gmap.css" />
    
        <!--FBML-->
        <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=276041512488182";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        <!--Fin FBML-->
        
        <!--Google+--> 
        <link href="https://plus.google.com/105216141232490476914" rel="publisher"/>
        <!--FIN Google+-->
    </head>
    <!--------------------------------------------</head> y <body>----------------------------------------------------------->
    <body>
    <div id="Tw3rs-main">
    <?php
    $pagina = array_pop(explode('/', $_SERVER['PHP_SELF']));
    crear_menu($idioma, $pagina);
    ?>
    <header class="Tw3rs-header clearfix">


    <div class="Tw3rs-shapes">


            </div>

                
                    
</header>
    <?php
}//FIN de imprimir_header()

function imprimir_footer(){
	?>
    <footer class="Tw3rs-footer clearfix">
<div class="Tw3rs-content-layout layout-item-0">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-1" style="width: 25%">
        <p><span style="color: rgb(255, 255, 255); text-shadow: rgba(153, 153, 153, 0.792969) 0.7px 0.7px 0px, rgba(140, 140, 140, 0.792969) 1.4px 1.4px 0px, rgba(122, 122, 122, 0.496094) 2.1px 2.1px 1px, rgba(107, 107, 107, 0.496094) 2.8px 2.8px 0px, rgba(92, 92, 92, 0.476563) 3.5px 3.5px 0px; font-size: 24px;">Google+</span></p>
        <br>
        <ul>
        <li><span style="color: rgb(255, 255, 255);"><!--Google+ Widget--><div id="gpluswidget" data-id="105216141232490476914" data-key="AIzaSyAJop92-7-jGaNTaw4mNXxryZod-QkA8Hg" data-posts="7" data-lang="no" data-width="" data-bkg="transparent" data-padding="10" data-border="fff" data-radius="30" data-txt="fff" data-link="fff" data-favicon="yes" data-header="yes" data-footer="yes" data-page="yes"></div>
<script type="text/javascript" src="http://gplusapi.googlecode.com/files/widget0.js"></script><!--FIN Google+ Widget--></span></li>
        </ul>
    </div><div class="Tw3rs-layout-cell layout-item-1" style="width: 25%">
        <p><span style="color: rgb(255, 255, 255); text-shadow: rgba(153, 153, 153, 0.792969) 0.7px 0.7px 0px, rgba(140, 140, 140, 0.792969) 1.4px 1.4px 0px, rgba(122, 122, 122, 0.496094) 2.1px 2.1px 1px, rgba(107, 107, 107, 0.496094) 2.8px 2.8px 0px, rgba(92, 92, 92, 0.476563) 3.5px 3.5px 0px; font-size: 24px;">Twitter</span></p>
        <div style="margin-left: 2em"><span style="color: #FFFFFF;"><!--Twitter Widget-->
    <a class="twitter-timeline" href="https://twitter.com/3RsdeMxico" data-widget-id="265977385277603841">Tweets por @3RsdeMxico</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <!--Fin Twitter widget--></span></div>
    </div><div class="Tw3rs-layout-cell layout-item-1" style="width: 25%">
        <p><span style="color: rgb(255, 255, 255); text-shadow: rgba(153, 153, 153, 0.792969) 0.7px 0.7px 0px, rgba(140, 140, 140, 0.792969) 1.4px 1.4px 0px, rgba(122, 122, 122, 0.496094) 2.1px 2.1px 1px, rgba(107, 107, 107, 0.496094) 2.8px 2.8px 0px, rgba(92, 92, 92, 0.476563) 3.5px 3.5px 0px; font-size: 24px;">Facebook</span></p>
        <div style="margin-left: 2em"><br></div>
        <div style="margin-left: 2em"><!--Facebook Widget-->
            <div class="fb-like" data-href="https://www.facebook.com/3RsdeMxico" data-send="true" data-width="100px" data-show-faces="true"></div>
            <!--FIN FB widget--></div>
    </div>
    </div>
</div>

</footer>

    </div>
    <p class="Tw3rs-page-footer">
        <span id="Tw3rs-footnote-links">Designed by <a href="http://tapalpawebs.com/" target="_blank">Hugo_Enrique@TapalpaWebs</a>.</span>
    </p>
</div>


</body>
</html>
    <?php
}//FIN de imprimir_footer()

//esta funcion sirve para identificar el idioma del navegador del cliente
function dime_idioma(){
	$idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	return $idioma;
}//FIN dime_idioma()

//esta funcion sirve para hacer una consulta a la bdds
function consulta_mysql($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include 'php/conexion.php';

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

//esta funcion sirve para hacer una consulta a la bdds
function consulta_bucle($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include 'php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
	
	//valor que regresa esta funcion
	return $registro;
}//<--fin consulta_mysql()

function crear_menu($idioma, $pagina){
	$consulta = 'SELECT * FROM encabezado WHERE idioma = "' . $idioma . '"';
	$menu = consulta_mysql($consulta);
	$index = '';
	$alianza = '';
	$productos = '';
	$servicios = '';
	$contacto = '';
	
	switch($pagina){
		case 'index.php'			:	$index	= 'class="active"'; break;
		case 'crear-alianza.php'	:	$alianza	= 'class="active"'; break;
		case 'productos.php'		:	$productos		= 'class="active"'; break;
		case 'servicios.php'		:	$servicios		= 'class="active"'; break;
		case 'contacto.php'			:	$contacto		= 'class="active"'; break;
	}//fin switch

	echo '<nav class="Tw3rs-nav clearfix">';
	echo 	'<ul class="Tw3rs-hmenu">';
	echo 		'<li><a href="index.php"' . $index . '>' . $menu['quienes_somos'] .'</a></li>';
	echo 		'<li><a href="crear-alianza.php" ' . $alianza .'>' . $menu['crear_alianza'] . '</a></li>';
	echo		'<li><a href="productos.php" ' . $productos . '>' . $menu['productos'] .'</a></li>';
	echo		'<li><a href="servicios.php" ' . $servicios .'>' . $menu['servicios'] . '</a></li>';
	echo		'<li><a href="contacto.php" ' . $contacto . '>' . $menu['contacto'] . '</a></li>' . 
				'<li><a href="#">' . $menu['link_idioma'] . '</a>' ;
	$lenguajes = submenu_idioma();
	?>
                    <ul>
                    	<?php
                        foreach($lenguajes as $lenguaje){
							echo '<li><a href="cambiar_lenguaje.php?lang=' . $lenguaje .'">' . $lenguaje . '</a></li>';
						}
						?>
                    	
                    </ul>
            	</li>
			</ul>;
	
    	</nav>
    <?php
	echo '';
}//FIN crear_menu()

function determinar_idioma($idioma_por_default){
	$tabla = '';
	switch(array_pop(explode('/', $_SERVER['PHP_SELF']))){
		case 'index.php': $tabla = 'quienes_somos'; break;
		case 'crear-alianza.php': $tabla = 'crear_alianza'; break;
		case 'productos.php': $tabla = 'pagina_productos'; break;
		case 'servicios.php': $tabla = 'pagina_productos'; break;
		case 'contacto.php': $tabla = 'contacto'; break;
	}
	$consulta = 'SELECT DISTINCT idioma FROM ' . $tabla;
	$idiomas = consulta_bucle($consulta);
	$idiomas_tabla = '';
	$indice = 0;
	$valor_devuelto = '';
	while($idioma = mysql_fetch_array($idiomas)){
		$idiomas_tabla[$indice] = $idioma['idioma'];
		$indice++;
	}
	if(in_array(dime_idioma(),$idiomas_tabla)){
		$valor_devuelto = dime_idioma();
	}
	else{
		$valor_devuelto = $idioma_por_default;	
	}
	return $valor_devuelto;
}

function submenu_idioma(){//esta funcion sirve para generar el submenu que aparece bajo el link de idioma
	//en esta variable se ingresaran los idiomas que se encuentren presentes en todas las 5 tablas
	$valor_regresado = array();
	
	//declarar el nombre de las tablas donde se desea buscar los idiomas
	$tablas = array(	'quienes_somos'		,
						'crear_alianza'		,
						'pagina_productos'	,
						'contacto'			,
						'encabezado'		);
	
	//asociar los idiomas existentes en cada tabla al array $resultados
	$resultados = array();
	foreach($tablas as $tabla){
		$consulta = 'SELECT idioma FROM ' . $tabla;
		$registros = consulta_bucle($consulta);
		while($registro = mysql_fetch_array($registros)){
			$resultados[$tabla][] = $registro['idioma'];
		}//Fin While
	}//Fin foreach
	
	//asociar todos los 186 idiomas del mundo al array $idiomas
	$idiomas = '';
	$consulta = 'SELECT codigo_idioma FROM idiomas';
	$registros = consulta_bucle($consulta);
	while($registro = mysql_fetch_array($registros)){
		$idiomas[] = $registro['codigo_idioma'];
	}//fin while
	
	//buscar que idioma de encuentra instalado en todas las 5 tablas
	foreach($idiomas as $idioma){
		if(	in_array($idioma,$resultados['quienes_somos'])		&&	in_array($idioma,$resultados['crear_alianza'])	&&
			in_array($idioma,$resultados['pagina_productos'])	&&	in_array($idioma,$resultados['contacto'])		&&
			in_array($idioma,$resultados['encabezado'])	){
				$valor_regresado[] = $idioma;
			}//fin if
	}//fin foreach
	
	//regresar un array con los codigos de idioma que se encuentran presentes en todas kas tablas
	return $valor_regresado;

}//FIN submenu_idioma()

?>