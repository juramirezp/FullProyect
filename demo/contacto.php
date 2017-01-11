<?php

$email_to = "contacto@fullproyect.cl";
$email_subject = "Contacto desde el sitio web";

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Asunto: " . $_POST['asunto'] . "\n";
$email_message .= "Mensaje: " . $_POST['texto'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: Contacto desde la Web '."\r\n".
'Reply-To: '.$_POST['email']."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
?>
