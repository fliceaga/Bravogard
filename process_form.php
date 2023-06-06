<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $cp = $_POST["cp"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Verificar si los campos requeridos están vacíos
    if (empty($nombre) || empty($email) || empty($telefono) || empty($cp) || empty($asunto) || empty($mensaje)) {
        echo "Por favor, completa todos los campos obligatorios.";
        exit; // Terminar la ejecución del script
    }

    // Construir el mensaje del correo electrónico
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Código Postal: $cp\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje: $mensaje\n";
    $contenido .= "Este formulario fue enviado el: " .date( 'd/m/y', time());

    // Enviar el correo electrónico
    $destinatario = "hola@bravogard.mx";
    $asuntoCorreo = "Nuevo formulario para Bravogard";
    $headers = "De: $email\r\n";

    if (mail($destinatario, $asuntoCorreo, $contenido, $headers)) {
        // El correo electrónico se envió correctamente
        echo "Gracias por escribirnos. Pronto nos pondremos en contacto contigo.";
    } else {
        // Hubo un error al enviar el correo electrónico
        echo "Lo sentimos, hubo un problema al enviar tu mensaje. Por favor, inténtalo nuevamente.";
    }
} else {
    // Si el formulario no se envió correctamente, redirigir o mostrar un mensaje de error
    echo "Error al enviar el formulario. Por favor, inténtalo nuevamente.";
}
        header('Location:exito.html');
?>
