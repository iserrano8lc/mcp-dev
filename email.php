<?php

if(isset($_POST['email'])) {



// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias

$email_to = "telemarketingmcp@hotmail.com,maximocontroldeplagas@hotmail.com ,maximocontroldeplagas@hotmail.com,elvisortiz16@gmail.com";

$email_subject = "Contacto desde el sitio web";
$email_from = "MAXIMO CONTROL DE PLAGAS <noreply@maximocontroldeplagas.com.mx>";


// Aquí se deberían validar los datos ingresados por el usuario



$email_message .= "nombre: " . $_POST['name'] . "\n";

$email_message .= "email: " . $_POST['email'] . "\n";
$email_message .= "telefono: " . $_POST['telefono'] . "\n";

$email_message .= "mensaje: " . $_POST['message'] . "\n";

// Ahora se envía el e-mail usando la función mail() de PHP



$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .=  "MAXIMO CONTROL DE PLAGAS <noreply@maximocontroldeplagas.com.mx>" . "\r\n" .
"Reply-To: noreply@maximocontroldeplagas.com.mx" . "\r\n" .
"X-Mailer: PHP/" . phpversion();
 

@mail($email_to, $email_subject, $email_message, $headers);

echo '1';
}
?>

