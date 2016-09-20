<?php
//en este script se procesan todas las adiciones de idiomas en las secciones
function insertar_mysql($consulta_mysql){
	//incluir el archivo de configuraciones de la db
	include '../../php/conexion.php';

	//conectarse a MYSQL
	$conexion = mysql_connect($host,$usuario,$pass) or die ("Problemas durante la conexion al servidor de Bases de Datos");
	
	//Seleccionar la BDD's
	mysql_select_db($bdd,$conexion) or die ("ha surgido un problema al tratar de conectarse a la Base de Datos");
	
	//consulta mySQL
	$registro = mysql_query($consulta_mysql) or die ("problema durante la consulta: " . mysql_error());
	
}

//en esta seccion se hace el proceso de actualizar el lenguaje a la seccion QUIENES SOMOS
if(	isset($_POST['id_quienes_somos'])	&&	!empty($_POST['id_quienes_somos'])	&&
	isset($_POST['idioma'])				&&	!empty($_POST['idioma'])			&&
	isset($_POST['texto_reduce'])		&&	!empty($_POST['texto_reduce'])		&&
	isset($_POST['texto_reutiliza'])	&&	!empty($_POST['texto_reutiliza'])	&&
	isset($_POST['texto_recicla'])		&&	!empty($_POST['texto_recicla'])		&&
	isset($_POST['titulo_mision'])		&&	!empty($_POST['titulo_mision'])		&&
	isset($_POST['texto_mision'])		&&	!empty($_POST['texto_mision'])		&&
	isset($_POST['titulo_vision'])		&&	!empty($_POST['titulo_vision'])		&&
	isset($_POST['texto_vision'])		&&	!empty($_POST['texto_vision'])		&&
	isset($_POST['titulo_objetivo'])	&&	!empty($_POST['titulo_objetivo'])	&&
	isset($_POST['texto_objetivo'])		&&	!empty($_POST['texto_objetivo'])	&&
	isset($_POST['titulo_calidad_eficiencia'])	&&	!empty($_POST['titulo_calidad_eficiencia'])			&&
	isset($_POST['texto_calidad_eficiencia'])	&&	!empty($_POST['texto_calidad_eficiencia'])	)	{
		//validar que los datos obligatorios de la seccion hayan sido capturados
		
		//consulta para agregar los datos
		$consulta  = 'UPDATE quienes_somos SET ';
		$consulta .= "idioma = '" . $_POST['idioma'] . "' , ";
		$consulta .= "texto_reduce = '" . utf8_encode($_POST['texto_reduce']) . "' , ";
		$consulta .= "texto_reutiliza = '" . utf8_encode($_POST['texto_reutiliza']) . "' , ";
		$consulta .= "texto_recicla = '" . utf8_encode($_POST['texto_recicla']) . "' , ";
		$consulta .= "titulo_mision = '" . utf8_encode($_POST['titulo_mision']) . "' , ";
		$consulta .= "texto_mision = '" . utf8_encode($_POST['texto_mision']) . "' , ";
		$consulta .= "titulo_vision = '" . utf8_encode($_POST['titulo_vision']) . "' , ";
		$consulta .= "texto_vision = '" . utf8_encode($_POST['texto_vision']) . "' , ";
		$consulta .= "titulo_objetivo = '" . utf8_encode($_POST['titulo_objetivo']) . "' , ";
		$consulta .= "texto_objetivo = '" . utf8_encode($_POST['texto_objetivo']) . "' , ";
		$consulta .= "titulo_calidad_eficiencia = '" . utf8_encode($_POST['titulo_calidad_eficiencia']) . "' , ";
		$consulta .= "texto_calidad_eficiencia = '" . utf8_encode($_POST['texto_calidad_eficiencia']) . "' , ";
		$consulta .= "parrafo_1 = '" . utf8_encode($_POST['parrafo_1']) . "' , ";
		$consulta .= "parrafo_2 = '" . utf8_encode($_POST['parrafo_2']) . "' , ";
		$consulta .= "texto_reduce = '" . utf8_encode($_POST['texto_reduce']) . "' , ";
		$consulta .= "parrafo_3 = '" . utf8_encode($_POST['parrafo_3']) . "' , ";
		$consulta .= "parrafo_4 = '" . utf8_encode($_POST['parrafo_4']) . "' ";
		$consulta .= "WHERE id_quienes_somos = '" . $_POST['id_quienes_somos'] . "'";

		echo $consulta;
		//insertar la consulta a mysql
		insertar_mysql($consulta);
		
		//Redirigir la ventana al finalizar el proceso exitoso
		header('location: ../panel-de-control.php?msg=qs_lang_upd');
		
	}//FIN if (Actualizar lenguaje a QUIENES SOMOS) <==funciona al 100%

//en esta seccion se hace el proceso de actualizar lenguaje a la seccion CREAR ALIANZA
elseif(	isset($_POST['id_alianza'])			&&			!empty($_POST['id_alianza'])	&&
		isset($_POST['idioma'])				&&			!empty($_POST['idioma'])		&&
		isset($_POST['titulo_alianza'])		&&			!empty($_POST['titulo_alianza'])&&
		isset($_POST['contenido_1'])		&&			!empty($_POST['contenido_1'])	&&
		isset($_POST['contenido_2'])		&&			!empty($_POST['contenido_2'])	&&
		isset($_POST['liga_contacto'])		&&			!empty($_POST['liga_contacto'])	) {
			//VALIDAR QUE los datos obligatorios hayan sido declarados y no esten vacios
			
			$consulta = "UPDATE crear_alianza SET ";
			$consulta .= "titulo_alianza = '" . utf8_encode($_POST['titulo_alianza']) . "' , ";
			$consulta .= "contenido_1 = '" . utf8_encode($_POST['contenido_1']) . "' , ";
			$consulta .= "contenido_2 = '" . utf8_encode($_POST['contenido_2']) . "' , ";
			$consulta .= "liga_contacto = '" . utf8_encode($_POST['liga_contacto']) . "' , ";
			$consulta .= "parrafo_adicional_1 = '" . utf8_encode($_POST['parrafo_adicional_1']) . "' , ";
			$consulta .= "parrafo_adicional_2 = '" . utf8_encode($_POST['parrafo_adicional_2']) . "' , ";
			$consulta .= "parrafo_adicional_3 = '" . utf8_encode($_POST['parrafo_adicional_3']) . "' , ";
			$consulta .= "parrafo_adicional_4 = '" . utf8_encode($_POST['parrafo_adicional_4']) . "' ";
			$consulta .= "WHERE id_alianza = '" . $_POST['id_alianza'] . "'";
			
			//insertar la consulta a mysql
			insertar_mysql($consulta);
			
			//Redirigir la ventana al finalizar el proceso exitoso
			header('location: ../panel-de-control.php?msg=ca_lang_upd');
			
		}//FIN elseif (Actualizar lenguaje a CREAR ALIANZA) <==funciona al 100%

//en esta seccion se hace el proceso de actualizar lenguaje a las secciones PRODUCTOS y SERVICIOS
elseif(	isset($_POST['id_producto'])			&&			!empty($_POST['id_producto'])			&&
		isset($_POST['idioma'])					&&			!empty($_POST['idioma'])				&&
		isset($_POST['titulo_productos'])		&&			!empty($_POST['titulo_productos'])		&&
		isset($_POST['contenido_productos'])	&&			!empty($_POST['contenido_productos'])	&&
		isset($_POST['titulo_servicios'])		&&			!empty($_POST['titulo_servicios'])		&&
		isset($_POST['contenido_servicios'])	&&			!empty($_POST['contenido_servicios'])	)	{
			//validar que los datos obligatorios esten presentes y no vacios
			
			$consulta = "UPDATE pagina_productos SET ";
			$consulta .= "titulo_productos = '" . utf8_encode($_POST['titulo_productos']) . "' , ";
			$consulta .= "contenido_productos = '" . utf8_encode($_POST['contenido_productos']) . "' , ";
			$consulta .= "titulo_servicios = '" . utf8_encode($_POST['titulo_servicios']) . "' , ";
			$consulta .= "contenido_servicios = '" . utf8_encode($_POST['contenido_servicios']) . "' ";
			$consulta .= "WHERE id_producto = '" . $_POST['id_producto'] . "'";
			
			//insertar la consulta a mysql
			insertar_mysql($consulta);

			//Redirigir la ventana al finalizar el proceso exitoso
			header('location: ../panel-de-control.php?msg=ps_lang_upd');
			
		}//fin elseif (Actualizar lenguaje a PRODUCTOS Y SERVICIOS) <==funciona al 100%

//en esta seccion se hace el proceso de actualizar lenguaje a la seccion CONTACTO
elseif(	isset($_POST['id_contacto'])			&&			!empty($_POST['id_contacto'])			&&
		isset($_POST['idioma'])					&&			!empty($_POST['idioma'])				&&
		isset($_POST['titulo_contacto'])		&&			!empty($_POST['titulo_contacto'])		&&
		isset($_POST['contenido_1'])			&&			!empty($_POST['contenido_1'])			&&
		isset($_POST['titulo_formulario'])		&&			!empty($_POST['titulo_formulario'])		&&
		isset($_POST['label_nombre'])			&&			!empty($_POST['label_nombre'])			&&
		isset($_POST['label_email'])			&&			!empty($_POST['label_email'])			&&
		isset($_POST['label_asunto'])			&&			!empty($_POST['label_asunto'])			&&
		isset($_POST['label_mensaje'])			&&			!empty($_POST['label_mensaje'])			&&
		isset($_POST['texto_boton'])			&&			!empty($_POST['texto_boton'])			&&
		isset($_POST['texto_msg_enviado'])		&&			!empty($_POST['texto_msg_enviado'])		&&
		isset($_POST['titulo_direccion'])		&&			!empty($_POST['titulo_direccion'])		&&
		isset($_POST['texto_direccion'])		&&			!empty($_POST['texto_direccion'])	)	{
			//verificar que tododos los campos obligatorios esten declarados y no vacios
			
			//declarar la consulta para la inserseion a la BDD's
			$consulta = "UPDATE contacto SET ";
			$consulta .= "titulo_contacto = '" . utf8_encode($_POST['titulo_contacto']) . "' , ";
			$consulta .= "contenido_1 = '" . utf8_encode($_POST['contenido_1']) . "' , ";
			$consulta .= "titulo_formulario = '" . utf8_encode($_POST['titulo_formulario']) . "' , ";
			$consulta .= "label_nombre = '" . utf8_encode($_POST['label_nombre']) . "' , ";
			$consulta .= "label_email = '" . utf8_encode($_POST['label_email']) . "' , ";
			$consulta .= "label_asunto = '" . utf8_encode($_POST['label_asunto']) . "' , ";
			$consulta .= "label_mensaje = '" . utf8_encode($_POST['label_mensaje']) . "' , ";
			$consulta .= "texto_boton = '" . utf8_encode($_POST['texto_boton']) . "' , ";
			$consulta .= "texto_msg_enviado = '" . utf8_encode($_POST['texto_msg_enviado']) . "' , ";
			$consulta .= "titulo_direccion = '" . utf8_encode($_POST['titulo_direccion']) . "' , ";
			$consulta .= "texto_direccion = '" . utf8_encode($_POST['texto_direccion']) . "' ";
			$consulta .= "WHERE id_contacto = '" . $_POST['id_contacto'] . "'";


			//echo $consulta;
			//insertar la consulta a la bbd's
			insertar_mysql($consulta);
			
			//redirigir ventatana despues del proceso exitoso
			header('location: ../panel-de-control.php?msg=co_lang_upd');
			
		}//fin elseif (Agregar lenguaje a CONTACTO) <==funciona al 100%

//en esta seccion se hace el proceso de agregar nuevo lenguaje a la seccion ENCABEZADO
elseif(	isset($_POST['id_encabezado'])			&&			!empty($_POST['id_encabezado'])			&&
		isset($_POST['idioma'])					&&			!empty($_POST['idioma'])				&&
		isset($_POST['quienes_somos'])			&&			!empty($_POST['quienes_somos'])			&&
		isset($_POST['crear_alianza'])			&&			!empty($_POST['crear_alianza'])			&&
		isset($_POST['productos'])				&&			!empty($_POST['productos'])				&&
		isset($_POST['servicios'])				&&			!empty($_POST['servicios'])				&&
		isset($_POST['contacto'])				&&			!empty($_POST['contacto'])				&&
		isset($_POST['link_idioma'])			&&			!empty($_POST['link_idioma'])		)	{
		//verificar que los datos obligatorios esten presentes y no vacios
		
		//declarar la consulta de actualizacion
		$consulta = "UPDATE encabezado SET ";
		$consulta .= "quienes_somos = '" . utf8_encode($_POST['quienes_somos']) . "' , ";
		$consulta .= "crear_alianza = '" . utf8_encode($_POST['crear_alianza']) . "' , ";
		$consulta .= "productos = '" . utf8_encode($_POST['productos']) . "' , ";
		$consulta .= "servicios = '" . utf8_encode($_POST['servicios']) . "' , ";
		$consulta .= "contacto = '" . utf8_encode($_POST['contacto']) . "' , ";
		$consulta .= "link_idioma = '" . utf8_encode($_POST['link_idioma']) . "' ";
		$consulta .= "WHERE id_encabezado = '" . $_POST['id_encabezado'] . "'";

		//insertar la consulta a la bdd's
		insertar_mysql($consulta);
		
		//Redirigir la ventana al finalizar
		header('location: ../panel-de-control.php?msg=he_lang_upd');
			
	}//FIM elseif (Agregar lenguaje al ENCABEZADO) <==funciona al 100%

//en esta seccion se hace el proceso de redirigir si no se puedo validar ninguna adicion
else{
	//Redirigir la ventana si no se logro ninguna validacion
	header('location: ../panel-de-control.php?msg=er_lang_upd');	
}
?>