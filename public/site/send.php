<?php



$destino ="clicktulum@gmail.com";

$name = $_POST["name"];

$phone= $_POST["phone"];

$email= $_POST["email"];

$message= $_POST["message"];

$contenido = "name: " . $name . "\nemail: " . $email . "\nphone: " . $phone . "\nmessage: " . $message;

mail($destino, "clicktulum.com - Contacto", $contenido);

echo " Nos pondremos en contaco con tigo."

?>



