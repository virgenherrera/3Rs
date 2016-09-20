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


//en esta seccion se hace el proceso de agregar nuevo lenguaje a la seccion QUIENES SOMOS
if(	isset($_POST['idioma'])				&&	!empty($_POST['idioma'])			&&
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
		$consulta  = "INSERT INTO quienes_somos ";
		$consulta .= "(idioma, texto_reduce, texto_reutiliza, texto_recicla, titulo_mision, texto_mision, ";
		$consulta .= "titulo_vision, texto_vision, titulo_objetivo, texto_objetivo, titulo_calidad_eficiencia, ";
		$consulta .= "texto_calidad_eficiencia, parrafo_1, parrafo_2, parrafo_3, parrafo_4";
		$consulta .= ") VALUES ('";
		$consulta .= utf8_encode($_POST['idioma']) . "', '";
		$consulta .= utf8_encode($_POST['texto_reduce']) . "', '";
		$consulta .= utf8_encode($_POST['texto_reutiliza']) . "', '";
		$consulta .= utf8_encode($_POST['texto_recicla']) . "', '";
		$consulta .= utf8_encode($_POST['titulo_mision']) . "', '";
		$consulta .= utf8_encode($_POST['texto_mision']) . "', '";		
		$consulta .= utf8_encode($_POST['titulo_vision']) . "', '";
		$consulta .= utf8_encode($_POST['texto_vision']) . "', '";
		$consulta .= utf8_encode($_POST['titulo_objetivo']) . "', '";
		$consulta .= utf8_encode($_POST['texto_objetivo']) . "', '";
		$consulta .= utf8_encode($_POST['titulo_calidad_eficiencia']) . "', '";
		$consulta .= utf8_encode($_POST['texto_calidad_eficiencia']) . "', '";
		$consulta .= utf8_encode($_POST['parrafo_1']) . "', '";
		$consulta .= utf8_encode($_POST['parrafo_2']) . "', '";
		$consulta .= utf8_encode($_POST['parrafo_3']) . "', '";
		$consulta .= utf8_encode($_POST['parrafo_4']) . "')";
		
		//insertar la consulta a mysql
		insertar_mysql($consulta);
		
		//Redirigir la ventana al finalizar el proceso exitoso
		header('location: ../panel-de-control.php?msg=qs_lang_succ');
		
	}//FIN if (agregar lenguaje a QUIENES SOMOS) <==funciona al 100%

//en esta seccion se hace el proceso de agregar nuevo lenguaje a la seccion CREAR ALIANZA
elseif(	isset($_POST['idioma'])				&&			!empty($_POST['idioma'])		&&
		isset($_POST['alianza'])			&&			!empty($_POST['alianza'])		&&
		isset($_POST['contenido_1'])		&&			!empty($_POST['contenido_1'])	&&
		isset($_POST['contenido_2'])		&&			!empty($_POST['contenido_2'])	&&
		isset($_POST['liga_contacto'])		&&			!empty($_POST['liga_contacto'])	) {
			//VALIDAR QUE los datos obligatorios hayan sido declarados y no esten vacios
			
			$consulta  = "INSERT INTO crear_alianza (";
			$consulta .= "idioma, titulo_alianza, contenido_1, contenido_2, liga_contacto, ";
			$consulta .= "parrafo_adicional_1, parrafo_adicional_2, parrafo_adicional_3, parrafo_adicional_4";
			$consulta .= ") VALUES ('";
			$consulta .= utf8_encode($_POST['idioma']) . "', '";
			$consulta .= utf8_encode($_POST['alianza']) . "', '";
			$consulta .= utf8_encode($_POST['contenido_1']) . "', '";
			$consulta .= utf8_encode($_POST['contenido_2']) . "', '";
			$consulta .= utf8_encode($_POST['liga_contacto']) . "', '";
			$consulta .= utf8_encode($_POST['parrafo_adicional_1']) . "', '";
			$consulta .= utf8_encode($_POST['parrafo_adicional_2']) . "', '";
			$consulta .= utf8_encode($_POST['parrafo_adicional_3']) . "', '";
			$consulta .= utf8_encode($_POST['parrafo_adicional_4']) . "')";
			
			//insertar la consulta a mysql
			insertar_mysql($consulta);
			
			//Redirigir la ventana al finalizar el proceso exitoso
			header('location: ../panel-de-control.php?msg=ca_lang_succ');
			
		}//FIN elseif (Agregar lenguaje a CREAR ALIANZA) <==funciona al 100%

//en esta seccion se hace el proceso de agregar nuevo lenguaje a las secciones PRODUCTOS y SERVICIOS
elseif(	isset($_POST['idioma'])					&&			!empty($_POST['idioma'])				&&
		isset($_POST['titulo_productos'])		&&			!empty($_POST['titulo_productos'])		&&
		isset($_POST['contenido_productos'])	&&			!empty($_POST['contenido_productos'])	&&
		isset($_POST['titulo_servicios'])		&&			!empty($_POST['titulo_servicios'])		&&
		isset($_POST['contenido_servicios'])	&&			!empty($_POST['contenido_servicios'])	)	{
			//validar que los datos obligatorios esten presentes y no vacios
			
			$consulta  = "INSERT INTO pagina_productos (";
			$consulta .= "idioma, titulo_productos, contenido_productos, titulo_servicios, contenido_servicios";
			$consulta .= ") VALUES ('";
			$consulta .= utf8_encode($_POST['idioma']) . "', '";
			$consulta .= utf8_encode($_POST['titulo_productos']) . "', '";
			$consulta .= utf8_encode($_POST['contenido_productos']) . "', '";
			$consulta .= utf8_encode($_POST['titulo_servicios']) . "', '";
			$consulta .= utf8_encode($_POST['contenido_servicios']) . "')";
			
			//insertar la consulta a mysql
			insertar_mysql($consulta);
			
			//Redirigir la ventana al finalizar el proceso exitoso
			header('location: ../panel-de-control.php?msg=ps_lang_succ');
			
		}//fin elseif (Agregar lenguaje a PRODUCTOS Y SERVICIOS) <==funciona al 100%

//en esta seccion se hace el proceso de agregar nuevo lenguaje a la seccion CONTACTO
elseif(	isset($_POST['idioma'])					&&			!empty($_POST['idioma'])				&&
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
			$consulta  = "INSERT INTO contacto (";
			$consulta .= "idioma, titulo_contacto, contenido_1, titulo_formulario, label_nombre, label_email, ";
			$consulta .= "label_asunto, label_mensaje, texto_boton, texto_msg_enviado, titulo_direccion, texto_direccion";
			$consulta .= ") VALUES ('";
			$consulta .= utf8_encode($_POST['idioma']) . "', '";
			$consulta .= utf8_encode($_POST['titulo_contacto']) . "', '";
			$consulta .= utf8_encode($_POST['contenido_1']) . "', '";
			$consulta .= utf8_encode($_POST['titulo_formulario']) . "', '";
			$consulta .= utf8_encode($_POST['label_nombre']) . "', '";
			$consulta .= utf8_encode($_POST['label_email']) . "', '";
			$consulta .= utf8_encode($_POST['label_asunto']) . "', '";
			$consulta .= utf8_encode($_POST['label_mensaje']) . "', '";
			$consulta .= utf8_encode($_POST['texto_boton']) . "', '";
			$consulta .= utf8_encode($_POST['texto_msg_enviado']) . "', '";
			$consulta .= utf8_encode($_POST['titulo_direccion']) . "', '";
			$consulta .= utf8_encode($_POST['texto_direccion']) . "')";
			
			//echo $consulta;
			//insertar la consulta a la bbd's
			insertar_mysql($consulta);
			
			//redirigir ventatana despues del proceso exitoso
			header('location: ../panel-de-control.php?msg=cn_lang_succ');
			
		}//fin elseif (Agregar lenguaje a CONTACTO) <==funciona al 100%

//en esta seccion se hace el proceso de agregar nuevo lenguaje a la seccion ENCABEZADO
elseif(	isset($_POST['idioma'])					&&			!empty($_POST['idioma'])				&&
		isset($_POST['quienes_somos'])			&&			!empty($_POST['quienes_somos'])			&&
		isset($_POST['crear_alianza'])			&&			!empty($_POST['crear_alianza'])			&&
		isset($_POST['productos'])				&&			!empty($_POST['productos'])				&&
		isset($_POST['servicios'])				&&			!empty($_POST['servicios'])				&&
		isset($_POST['contacto'])				&&			!empty($_POST['contacto'])				&&
		isset($_POST['link_idioma'])			&&			!empty($_POST['link_idioma'])		)	{
		//verificar que los datos obligatorios esten presentes y no vacios
		
		//declarar la consulta dei insersion
		$consulta  = "INSERT INTO encabezado (";
		$consulta .= "idioma, quienes_somos, crear_alianza, productos, servicios, contacto, link_idioma";
		$consulta .= ") VALUES ('";
		$consulta .= utf8_encode($_POST['idioma']) . "', '";
		$consulta .= utf8_encode($_POST['quienes_somos']) . "', '";
		$consulta .= utf8_encode($_POST['crear_alianza']) . "', '";
		$consulta .= utf8_encode($_POST['productos']) . "', '";
		$consulta .= utf8_encode($_POST['servicios']) . "', '";
		$consulta .= utf8_encode($_POST['contacto']) . "', '";
		$consulta .= utf8_encode($_POST['link_idioma']) . "')";

		//insertar la consulta a la bdd's
		insertar_mysql($consulta);
		
		//Redirigir la ventana al finalizar
		header('location: ../panel-de-control.php?msg=he_lang_succ');
			
	}//FIM elseif (Agregar lenguaje al ENCABEZADO) <==funciona al 100%
	
//en esta seccion se hace el proceso de redirigir si no se puedo validar ninguna adicion
else{
	//Redirigir la ventana si no se logro ninguna validacion
	header('location: ../panel-de-control.php?msg=er_lang_succ');	
}
?>