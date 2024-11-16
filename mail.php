<?php 

$name = $_POST['Nombre'];
$email = $_POST['Email'];
$message = $_POST['Mensaje'];
$formcontent="Contact form\n\nFrom: $name \nMessage: $message";
$recipient = "kpaulfran23@gmail.com";
$subject = "Contacto";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! E-mail send.";

?>