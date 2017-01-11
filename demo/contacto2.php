<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['texto'];

//incluimos la clase PHPMailer
require_once('mailer/class.phpmailer.php');

//instancio un objeto de la clase PHPMailer
$mail = new PHPMailer(); // defaults to using php "mail()"

//defino el cuerpo del mensaje en una variable $body
//se trae el contenido de un archivo de texto
//también podríamos hacer $body="contenido...";
$body = file_get_contents('mailer/examples/contents.html');
//Esta línea la he tenido que comentar
//porque si la pongo me deja el $body vacío
// $body = preg_replace('/[]/i','',$body);

// // Codigicacion de caracteres
// $mail­>CharSet = "UTF­8";
// $mail­>Encoding = "quoted­printable";

//defino el email y nombre del remitente del mensaje
$mail­>SetFrom($email, $nombre);

//defino la dirección de email de "reply", a la que responder los mensajes
//Obs: es bueno dejar la misma dirección que el From, para no caer en spam
$mail­>AddReplyTo($email, $nombre);
//Defino la dirección de correo a la que se envía el mensaje
$address = "juan@bitealo.cl";
//la añado a la clase, indicando el nombre de la persona destinatario
$mail­>AddAddress($address, "Contacto FullProyect");

//Añado un asunto al mensaje
$mail­>Subject = "Contacto desde la web";

//Puedo definir un cuerpo alternativo del mensaje, que contenga solo texto
$mail­>AltBody = "Cuerpo alternativo del mensaje";

//inserto el texto del mensaje en formato HTML
// $mail­>MsgHTML($body);
$mail­>MsgHTML($body);
// "nombre= ". $nombre. "email= ". $email. " asunto= ". $asunto." mensaje=". $mensaje
//asigno un archivo adjunto al mensaje
// $mail­>AddAttachment("ruta/archivo_adjunto.gif");

//envío el mensaje, comprobando si se envió correctamente
if(!$mail­>Send()) {
echo "Error al enviar el mensaje: " . $mail­>ErrorInfo;
} else {
echo "Mensaje enviado!!";
}














// // ----------------------

// $email_to = "juan@bitealo.cl";
// $email_subject = "Contacto desde el sitio web";

// $email_message = "Detalles del formulario de contacto:\n\n";
// $email_message .= "Nombre: " .  . "\n";
// $email_message .= "E-mail: " .  . "\n";
// $email_message .= "Asunto: " .  . "\n";
// $email_message .= "Mensaje: " .  . "\n\n";


// // Ahora se envía el e-mail usando la función mail() de PHP
// $headers = 'From: Contacto desde la Web '."\r\n".
// 'Reply-To: '.$_POST['email']."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// @mail($email_to, $email_subject, $email_message, $headers);

// echo "¡El formulario se ha enviado con éxito!";
?>
