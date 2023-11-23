<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $telefono = $_POST["number"];
    $mensaje = $_POST["mensaje"];

    // Dirección de correo a la que quieres enviar el formulario
    $destinatario = "elmersaulg16@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto de $nombre";

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $email\r\n";

    // Enviar el correo
    mail($destinatario, $asunto, $cuerpo, $cabeceras);

    // Redirigir a una página de confirmación
    header("Location: index.html");
}
?>