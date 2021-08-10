<?php 
$destino="alejandrolugo152001@gmail.com";
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$todo="Nombre: ". $nombre . "\nEmail: ". $email ."\nMensaje: ".$mensaje;
mail($destino, $asunto, $contenido);
header("location:gracias.html");
?>