<?php
include_once "php/funciones.php";
session_start();

if(!isset($_SESSION['idioma']) || empty($_SESSION['idioma'])){
	$_SESSION['idioma'] = determinar_idioma('es');
	
}
$idioma = $_SESSION['idioma'];
$tx_productos = consulta_mysql('SELECT * FROM pagina_productos WHERE idioma = "' . $idioma .'"');
$tx_index = consulta_mysql('SELECT * FROM quienes_somos WHERE idioma = "' . $idioma . '"');
$productos = consulta_bucle('SELECT * FROM productos WHERE idioma = "' . $idioma .'" ORDER BY RAND() LIMIT 10');
$servicios = consulta_bucle('SELECT * FROM servicios WHERE idioma = "' . $idioma . '" ORDER BY RAND() LIMIT 10');
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
<meta name="description" content="Description">
<meta name="keywords" content="Keywords">


<style>.Tw3rs-content .Tw3rs-postcontent-0 .layout-item-0 { border-top-width:1px;border-top-style:Dashed;border-top-color:#CCCCCC;margin-top: 5px;margin-right: 10px;margin-bottom: 5px;margin-left: 10px;  }
.Tw3rs-content .Tw3rs-postcontent-0 .layout-item-1 { color: #242424; background: #FFFFFF url('images/c572e.png') no-repeat scroll; padding-right: 0px;padding-left: 0px;  }
.Tw3rs-content .Tw3rs-postcontent-0 .layout-item-2 { border-spacing: 20px 0px; border-collapse: separate;  }
.Tw3rs-content .Tw3rs-postcontent-0 .layout-item-3 { padding: 20px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style>

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
<div class="Tw3rs-sheet clearfix">
            <div class="Tw3rs-layout-wrapper clearfix">
                <div class="Tw3rs-content-layout">
                    <div class="Tw3rs-content-layout-row">
                        <div class="Tw3rs-layout-cell Tw3rs-content clearfix"><article class="Tw3rs-post Tw3rs-article">
                                
                                                
                <div class="Tw3rs-postcontent Tw3rs-postcontent-0 clearfix"><div class="Tw3rs-content-layout">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-1" style="width: 100%" >
        <br style="line-height: 450px">
        <div style="position:absolute;top:110px;left:50px;text-shadow:3px 3px #cccccc;">
        <h5><?php echo utf8_decode($tx_index['texto_reduce']); ?><br>
        <?php echo utf8_decode($tx_index['texto_reutiliza']); ?><br>
        <?php echo utf8_decode($tx_index['texto_recicla']); ?></h5>
        </div>
    </div>
    </div>
</div>
<div class="Tw3rs-content-layout-br layout-item-0">
</div><div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-3" style="width: 33%" >
        <p style="text-align:center;"><img width="201" height="201" alt="" src="images/green1.jpg" class=""></p>
        <h4 style="text-align:center;"><?php echo utf8_decode($tx_index['titulo_mision']); ?></h4>
        <p style="text-align:center;"><?php echo utf8_decode($tx_index['texto_mision']); ?>.</p>
    </div><div class="Tw3rs-layout-cell layout-item-3" style="width: 34%" >
        <p style="text-align:center;"><img width="201" height="201" alt="" src="images/green2-2.jpg" class=""></p>
        <h4 style="text-align:center;"><?php echo utf8_decode($tx_index['titulo_vision']); ?></h4>
        <p style="text-align:center;"><?php echo utf8_decode($tx_index['texto_vision']); ?></p>
    </div><div class="Tw3rs-layout-cell layout-item-3" style="width: 33%" >
        <p style="text-align:center;"><img width="201" height="201" alt="" src="images/green3-2.jpg" class=""></p>
        <h4 style="text-align:center;"><?php echo utf8_decode($tx_index['titulo_objetivo']); ?></h4>
        <p style="text-align:center;"><?php echo utf8_decode($tx_index['texto_objetivo']); ?></p>
    </div>
    </div>
</div>
<div class="Tw3rs-content-layout-br layout-item-0">
</div><div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-3" style="width: 25%" >
        <h3><a href="productos.php"><?php echo utf8_decode($tx_productos['titulo_productos']); ?></a></h3>
        <?php while($producto = mysql_fetch_array($productos)){
		?>
        <ul>
        	<li><a href="productos.php"><?php echo utf8_decode($producto['nombre_producto']); ?></a></li>
        </ul>
        
        <?php }//Fin while@productos
		?>
    </div><div class="Tw3rs-layout-cell layout-item-3" style="width: 50%" >
        <h1><?php echo utf8_decode($tx_index['titulo_calidad_eficiencia']); ?></h1>
        <p><img width="449" height="269" alt="" src="images/ga_image.jpg" style="margin-right:-50px;" class=""></p>
        <p<?php echo utf8_decode($tx_index['texto_calidad_eficiencia']); ?></p>
        
    </div><div class="Tw3rs-layout-cell layout-item-3" style="width: 25%" >
        <h3><a href="servicios.php"><?php echo utf8_decode($tx_productos['titulo_servicios']); ?></a></h3>
        <ul>
        <?php while($servicio = mysql_fetch_array($servicios)){
		?>
            <li><a href="servicios.php"><?php echo utf8_decode($servicio['nombre_servicio']); ?></a></li>
        <?php	}//FIN while@servicios
		?>
        </ul>
    </div>
    </div>
</div>
<!--Nueva seccion quienes_somos-->
<div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
        <div class="Tw3rs-layout-cell layout-item-3" style="width: 100%" >
			<?php echo utf8_decode($servicio['parrafo_1']); ?>
		</div>
	</div>
</div>
<div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
        <div class="Tw3rs-layout-cell layout-item-3" style="width: 100%" >
			<?php echo utf8_decode($servicio['parrafo_2']); ?>
		</div>
	</div>
</div>
<div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
        <div class="Tw3rs-layout-cell layout-item-3" style="width: 100%" >
			<?php echo utf8_decode($servicio['parrafo_3']); ?>
		</div>
	</div>
</div>
<div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
        <div class="Tw3rs-layout-cell layout-item-3" style="width: 100%" >
			<?php echo utf8_decode($servicio['parrafo_4']); ?>
		</div>
	</div>
</div>
<!--FIN Nueva seccion quienes_somos-->
</div>
                                
                </article></div>
                    </div>
                </div>
            </div>
<?php
imprimir_footer()
?>