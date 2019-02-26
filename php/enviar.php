<?php
	
	$destino = "info@netwart.com";
	// $asunto = "contacto desde nuestra web";
	// llamando a los campos
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$areacode = $_POST['areacode'];
	$telnum = $_POST['telnum'];
	$emailid = $_POST['emailid'];
	$comentario = $_POST['comentario'];

	// datos para el correo
	$contenido = "Nombre: ". $nombre . "\nApellidos:" . $apellido . "\nCodigo Telefono:" . $areacode . "\nTelefono:" . $telnum . "\nCorreo:" . $emailid . "\nComentario:" . $comentario;

	// $carta = "De: $nombre \n";
	// $carta .= "Correo: $emailid \n";
	// $carta .= "Codigo telefono: $areacode \n";
	// $carta .= "Telefono: $telnum \n";
	// $carta .= "Mensaje: $comentario";

	// Enviando Mensaje
	mail($destino,"contacto", $contenido);
	header("Location:gracias.html");

?>