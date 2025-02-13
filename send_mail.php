<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar datos
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])) {
        echo json_encode(["status" => "error", "message" => "Todos los campos son obligatorios."]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'server.idital.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'participa@presumedefrutacontorres.com';
        $mail->Password   = 'z68e%39Gd';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Configurar el correo
        $mail->setFrom('participa@presumedefrutacontorres.com', 'Frutas Torres');
        $mail->addAddress('participa@presumedefrutacontorres.com');

        // Validar el email antes de agregarlo como reply-to
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($_POST["email"], $_POST["name"]);
        }

        $mail->Subject = "Nuevo registro de participante";
        $mail->Body    = "Nombre: " . htmlspecialchars($_POST["name"]) . 
                        "\nCentro: " . htmlspecialchars($_POST["school"]) . 
                        "\nCorreo: " . htmlspecialchars($_POST["email"]) . 
                        "\nTeléfono: " . htmlspecialchars($_POST["phone"]) .
                        "\nMensaje:\n" . htmlspecialchars($_POST["message"]);

        // Enviar
        if ($mail->send()) {
            echo json_encode(["status" => "success", "message" => "Correo enviado correctamente."]);
        } else {
            echo json_encode(["status" => "error", "message" => "No se pudo enviar el correo."]);
        }
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "Error: {$mail->ErrorInfo}"]);
    }
}
?>