<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Ruta al archivo autoload.php de PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['name'];
    $apellidos = $_POST['lastname'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $mensaje = $_POST['message'];

    // Crear una nueva instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurar el servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com'; // Cambia esto por el servidor SMTP de Outlook
        $mail->SMTPAuth = true;
        $mail->Username = 'tarehome@outlook.com'; // Cambia esto por tu dirección de correo electrónico de Outlook
        $mail->Password = 'Bernacarrifran1234'; // Cambia esto por tu contraseña de correo electrónico de Outlook
        $mail->Port = 587; // Puerto SMTP

        // Configurar el remitente y el destinatario
        $mail->setFrom('tarehome@outlook.com', 'TareHome'); // Cambia esto por la dirección de correo electrónico y el nombre del remitente deseado
        $mail->addAddress('tarehome@outlook.com'); // Cambia esto por tu dirección de correo electrónico de Outlook
        $mail->addReplyTo($email, $nombre);

        // Configurar el contenido del correo
        $mail->isHTML(false);
        $mail->Subject = 'Mensaje de contacto desde tu sitio web';
        $mail->Body = "Nombre: $nombre\nApellidos: $apellidos\nEmail: $email\nTeléfono: $telefono\nMensaje:\n$mensaje";

        // Enviar el correo
        $mail->send();
        echo '¡El mensaje ha sido enviado correctamente!';
        echo '<br><br><a href="javascript:history.back()">Volver</a>';
        
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
        
    }
} else {
    // Si no se accede mediante el método POST, redirigir al formulario
    header("Location: home.php");
    exit;
}
?>
