<?php
	
//llamando a los campos
$nombre = $POST['nombre'];
$correo = $POST['correo'];
$telefono = $POST['telefono'];
$mensaje = $POST['mensaje'];

//Datos para el correo
$destinatario = "info@netwart.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

//Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>