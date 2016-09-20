<?php
include_once "php/funciones.php";

echo imprimir_header();
$idioma = $_SESSION['idioma'];
$tx_contacto = consulta_mysql('SELECT * FROM contacto WHERE idioma = "' . $idioma .'"');
?>
<div class="Tw3rs-sheet clearfix">
            <div class="Tw3rs-layout-wrapper clearfix">
                <div class="Tw3rs-content-layout">
                    <div class="Tw3rs-content-layout-row">
                        <div class="Tw3rs-layout-cell Tw3rs-content clearfix"><article class="Tw3rs-post Tw3rs-article">
                                <h2 class="Tw3rs-postheader"><?php echo utf8_decode($tx_contacto['titulo_contacto']); ?></h2>
                                                
                <div class="Tw3rs-postcontent Tw3rs-postcontent-0 clearfix"><div class="Tw3rs-content-layout-wrapper layout-item-0">
<div class="Tw3rs-content-layout layout-item-1">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-2" style="width: 33%" >
        <p style="text-align: justify;"><?php echo utf8_decode($tx_contacto['contenido_1']); ?></p>
    </div><div class="Tw3rs-layout-cell layout-item-2" style="width: 67%" >
        <div id="map_canvas" class="map rounded"><b>Este Div se Sustituye con un Gmap</b></div>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
		<script src="js/gMaps/jquery.min.js"></script>
        <script src="js/gMaps/demo.js"></script>
        <script src="js/gMaps/jquery.ui.map.js"></script>
		<script type="text/javascript">
            $(function() { 
				demo.add(function() {
					$('#map_canvas').gmap({
						'center': '20.750506,-103.419985',
						'zoom': 15,
						'disableDefaultUI':false,
						'callback': function() {
						var self = this;
						self.addMarker({'position': this.get('map').getCenter() }).click(function() {
							self.openInfoWindow({ 'content': '3Rs de México!' }, this);
						});	
					}});
				}).load();
			});
        </script>
    </div>
    </div>
</div>
</div>
<div class="Tw3rs-content-layout-wrapper layout-item-0">
<div class="Tw3rs-content-layout layout-item-1">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-2" style="width: 75%" >
        <p style="text-align: justify;"><h2><?php echo utf8_decode($tx_contacto['titulo_formulario']); ?></h2>
        <!-- form -->
		<script type="text/javascript" src="js/form-validation.js"></script>
        <form id="contactForm" action="#" method="post">
            <fieldset>
                <div>
                    <input name="name"  id="name" type="text" class="form-poshytip"/>
                    <label><?php echo utf8_decode($tx_contacto['label_nombre']); ?></label>
                </div>
                <div>
                    <input name="email"  id="email" type="text" class="form-poshytip"/>
                    <label><?php echo utf8_decode($tx_contacto['label_email']); ?></label>
                </div>
                <div>
                    
                    <input name="asunto"  id="asunto" type="text" class="form-poshytip"/>
                    <label><?php echo utf8_decode($tx_contacto['label_asunto']); ?></label>
                </div>
                <div>
                    <textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip"></textarea>
                    <label><?php echo utf8_decode($tx_contacto['label_mensaje']); ?></label>
                </div>
                
                <!-- send mail configuration -->
                <input type="hidden" value="hugo@tapalpawebs.com" name="to" id="to" />
                <input type="hidden" value="Contacto Pagina Web" name="subject" id="subject" />
                <input type="hidden" value="php/send-mail.php" name="sendMailUrl" id="sendMailUrl" />
                <!-- ENDS send mail configuration -->
                
                <p><input type="button" value="<?php echo utf8_decode($tx_contacto['texto_boton']); ?>" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
            </fieldset>
            
        </form>
        <p id="success" class="success"><?php echo utf8_decode($tx_contacto['texto_msg_enviado']); ?></p>
        <!-- ENDS form -->
	<!-- IMPORTANTE: no olvides configurar el archivo: send-mail.php --></p>
    </div><div class="Tw3rs-layout-cell layout-item-2" style="width: 25%" >
        <p style="text-align: justify;"><h3><?php echo utf8_decode($tx_contacto['titulo_direccion']); ?></h3><?php echo utf8_decode($tx_contacto['texto_direccion']); ?></p>
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
imprimir_footer()
?>