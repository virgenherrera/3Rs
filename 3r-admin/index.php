<?php
if(isset($_GET['op']) and !empty($_GET['op']) and $_GET['op'] == 'logout'){
	session_start();
	session_destroy();
	$_GET['error'] = $_GET['op'];
}
?>

<!DOCTYPE html>
    <html dir="ltr" lang="es-MX"><head>
        <meta charset="utf-8">
        <title>Iniciar Sesion</title>
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
    
    </style></head>
    <body>
    <div id="art-main">
    <header class="art-header clearfix">
    
    
        <div class="art-shapes">
    <h1 class="art-headline" data-left="18.9%">
        <a href="#">3r's de méxico</a>
    </h1>
    <h2 class="art-slogan" data-left="47.85%">Pánel Adminsitrativo</h2>
    
    
                </div>
    
                            
                        
    </header>
<nav class="art-nav clearfix">
    <div class="art-nav-inner">

	</div>
</nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
        <b>
		<?php
			if(isset($_GET['error']) and !empty($_GET['error'])){
				switch ($_GET['error']){
					case 1: echo 'Debes ingresar tu usuario y Contraseña'; break;
					case 2: echo 'Tu nombre de usuario o contraseña no son validos'; break;
					case 3: echo 'Tu nombre de usuario NO existe'; break;
					case 4: echo 'Debes INICIAR SESION para poder ver el Panel de Control'; break;
					case 'logout': echo 'haz CERRADO SESION exitosamente'; break;
				}
			}
		?></b>    
                
        </div>
</div></div>
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <h2 class="art-postheader">Iniciar Sesion</h2>
                                                                                
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%; text-align:left" >
        <form action="verificar.php" method="post">
        	<br>
           	<input type="email" name="usuario" required><br>
            <label>Nombre de usuario</label>
            <input type="password" name="pass" required><br>
            <label>Contraseña</label><br>
            <input type="submit" value="Iniciar Sesion">
        </form>
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
    <p><br></p>
    <p>Panel Administgrativo&nbsp;</p>
    <p>Tapalpa Webs Copyright © 2012. Reservados todos los derechos.</p>
        <p class="art-page-footer">
            <span id="art-footnote-links">Designed by <a href="http://www.tapalpawebs.com/" target="_blank">Hugo_Enrique@TapalpaWebs</a>.</span>
        </p>
      </div>
    </footer>
    
    </div>
    
    
    </body>
    </html>