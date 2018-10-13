<?php
$destino="reyesprojects.service@gmail.com";
$nombre= $_POST["nombre"];
$corroe= $_POST["corroe"];
$asunto= $_POST["asunto"];
$mensaje= $_POST["mensaje"];
$contenido="Nombre: ". $nombre ."\nCorreo: " . $corroe . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
mail($destino,"Contacto",$contenido);
header("location:index.html");

?>