<?php
if (isset($_POST['enviar_contacto'])) {
    $nombre_contacto = htmlspecialchars($_POST['nombre_contacto'] ?? '');
    $email_contacto = htmlspecialchars($_POST['email_contacto'] ?? '');
    $mensaje_contacto = htmlspecialchars($_POST['mensaje_contacto'] ?? '');

    echo "Contacto recibido de: $nombre_contacto<br>";
    echo "Email: $email_contacto<br>";
    echo "Gracias por tu mensaje, $nombre_contacto. Lo procesaremos pronto.<br>";
} else {
    echo "No se ha enviado ningún formulario de contacto.";
}
?>
