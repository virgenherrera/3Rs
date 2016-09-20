<?php
include_once "php/funciones.php";

echo imprimir_header();
$idioma = $_SESSION['idioma'];
$tx_alianza = consulta_mysql('SELECT * FROM crear_alianza WHERE idioma = "' . $idioma . '"');
?>
<div class="Tw3rs-sheet clearfix">
	<div class="Tw3rs-layout-wrapper clearfix">
		<div class="Tw3rs-content-layout">
			<div class="Tw3rs-content-layout-row">
				<div class="Tw3rs-layout-cell Tw3rs-content clearfix"><article class="Tw3rs-post Tw3rs-article">
				<h2 class="Tw3rs-postheader"><?php echo utf8_decode($tx_alianza['titulo_alianza']); ?></h2>
                                                
				<div class="Tw3rs-postcontent Tw3rs-postcontent-0 clearfix"><div class="Tw3rs-content-layout-wrapper layout-item-0">
					<div class="Tw3rs-content-layout layout-item-1">
						<div class="Tw3rs-content-layout-row">
							<div class="Tw3rs-layout-cell layout-item-2" style="width: 45%" >
							<p style="text-align: justify;"><?php echo utf8_decode($tx_alianza['contenido_1']); ?></p></div>
							<div class="Tw3rs-layout-cell layout-item-2" style="width: 55%" ><img src="images/alianza.jpg" /></div>
    					</div>
					</div>
				</div>
                <div class="Tw3rs-content-layout-wrapper layout-item-0">
                	<div class="Tw3rs-content-layout layout-item-1">
    					<div class="Tw3rs-content-layout-row">
    						<div class="Tw3rs-layout-cell layout-item-2" style="width: 50%" ><img src="images/alianza2.jpg" alt="Alianza de Negocios" /></div>
							<div class="Tw3rs-layout-cell layout-item-2" style="width: 50%" >
                            	<p style="text-align: justify;"><?php echo utf8_decode($tx_alianza['contenido_2']); ?></p>
                                <p><a href="contacto.php"><?php echo utf8_decode($tx_alianza['liga_contacto']); ?></a></p>
   							</div>
						</div>
					</div>
				</div>
				<div class="Tw3rs-content-layout-wrapper layout-item-0">
                	<div class="Tw3rs-content-layout layout-item-1">
    					<div class="Tw3rs-content-layout-row">
    						<div class="Tw3rs-layout-cell layout-item-2" style="width: 100%" >
                            <?php echo utf8_decode($tx_alianza['parrafo_adicional_1']); ?> 	
                            </div>
						</div>
					</div>
				</div>
                <div class="Tw3rs-content-layout-wrapper layout-item-0">
                	<div class="Tw3rs-content-layout layout-item-1">
    					<div class="Tw3rs-content-layout-row">
    						<div class="Tw3rs-layout-cell layout-item-2" style="width: 100%" >
                            <?php echo utf8_decode($tx_alianza['parrafo_adicional_2']); ?> 	
                            </div>
						</div>
					</div>
				</div>
                <div class="Tw3rs-content-layout-wrapper layout-item-0">
                	<div class="Tw3rs-content-layout layout-item-1">
    					<div class="Tw3rs-content-layout-row">
    						<div class="Tw3rs-layout-cell layout-item-2" style="width: 100%" >
                            <?php echo utf8_decode($tx_alianza['parrafo_adicional_3']); ?> 	
                            </div>
						</div>
					</div>
				</div>
                <div class="Tw3rs-content-layout-wrapper layout-item-0">
                	<div class="Tw3rs-content-layout layout-item-1">
    					<div class="Tw3rs-content-layout-row">
    						<div class="Tw3rs-layout-cell layout-item-2" style="width: 100%" >
                            <?php echo utf8_decode($tx_alianza['parrafo_adicional_4']); ?> 	
                            </div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
                    </div>
                </div>
            </div>
<?php
imprimir_footer()
?>