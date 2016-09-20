<?php
include_once "php/funciones.php";
echo imprimir_header();
$idioma = $_SESSION['idioma'];
$productos = consulta_bucle('SELECT * FROM productos WHERE idioma = "' . $idioma .'"');
$tx_productos = consulta_mysql('SELECT * FROM pagina_productos WHERE idioma = "' . $idioma .'"');
?>
<div class="Tw3rs-sheet clearfix">
            <div class="Tw3rs-layout-wrapper clearfix">
                <div class="Tw3rs-content-layout">
                    <div class="Tw3rs-content-layout-row">
                        <div class="Tw3rs-layout-cell Tw3rs-content clearfix"><article class="Tw3rs-post Tw3rs-article">
                           
                                                
                <div class="Tw3rs-postcontent Tw3rs-postcontent-0 clearfix"><div class="Tw3rs-content-layout-wrapper layout-item-0">
<div class="Tw3rs-content-layout layout-item-1">
    <div class="Tw3rs-content-layout-row">
    
    <div class="Tw3rs-layout-cell layout-item-2" style="width: 100%" >
        <p><span style="font-size: 32px; text-transform: uppercase;"><a name="servicios"><?php echo utf8_decode($tx_productos['titulo_productos']); ?></a></span></p>
    </div>
    </div>
</div>
</div>
<div class="Tw3rs-content-layout-wrapper layout-item-0">
<div class="Tw3rs-content-layout layout-item-1">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-2" style="width: 100%" >
        <?php echo utf8_decode($tx_productos['contenido_productos']); ?>
    </div>
    </div>
</div>
</div>
<div class="Tw3rs-content-layout-wrapper layout-item-0">
<div class="Tw3rs-content-layout layout-item-1">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-2" style="width: 100%" >
        <div id="contenedor_accordion" style="text-align:justify">
            <div id="accordion_serv">
                <?php
				while($producto = mysql_fetch_array($productos)){
				?>
                <h3><?php echo utf8_decode($producto['nombre_producto']); ?></h3>
                <div>
                    <img src="images/productos/<?php echo utf8_decode($producto['imagen_producto']); ?>">
                    <p><?php echo utf8_decode($producto['descripcion_producto']); ?></p>
                    <!--<img src="images/green1.jpg" width="201" height="201">-->
                </div>
                <?php
				}//<---FIN while@servicios
				?>
            </div><!--FIN Accordion SERVICIOS-->
    </div>
    </div>
</div>
</div>
</div>
                                
                </article></div>
                    </div>
                </div>
            </div>

<?php
echo imprimir_footer();
?>