<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo-electronico"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "soporte@kapix.co.cr";
    $asuntoCorreo = "Nuevo mensaje de contacto: $asunto";
    $cuerpoCorreo = "Nombre: $nombre\nCorreo: $correo\nAsunto: $asunto\nMensaje: $mensaje";

 $headers = "From: $correo\r\nReply-To: $correo";

    if (mail($destinatario, $asuntoCorreo, $cuerpoCorreo, $headers)) {
        // si envio
        echo "¡Gracias! Tu mensaje ha sido enviado.";
    } else {
        // no envio
        echo "Error al enviar el mensaje. Por favor, intenta de nuevo más tarde.";
    }
    exit();
} //cierrra if

?>