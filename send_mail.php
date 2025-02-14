<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';
require  'credenciales.php';
// Configurar encabezado para JSON


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
        $mail->Host       = $host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $user;
        $mail->Password   = $password;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Configurar el correo
        $mail->setFrom($email, 'Frutas Torres');
        $mail->addAddress($email);

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
            echo "
                <div id='response' class='absolute w-screen h-full top-0 left-0 flex flex-col items-center justify-center' style='z-index: 100; background-color: rgba(0,0,0,0.5);'>
                    <div class='bg-green text-white p-6 rounded-lg shadow-lg w-10/12 lg:w-3/12 text-center'>
                        Correo enviado correctamente.
                    </div>
                </div>
                <script>
                    document.getElementById('response').addEventListener('click', function () {
                        this.classList.add('hidden'); // Oculta el div completo al hacer clic
                    });
                </script>
                ";
        } else {
            echo "
                <div id='response' class='absolute w-screen h-full top-0 left-0 flex flex-col items-center justify-center' style='z-index: 100;background-color: rgba(0,0,0,0.5);'>
                    <div class='bg-orange text-white p-6 rounded-lg shadow-lg w-10/12 lg:w-3/12 text-center'>No se pudo enviar el correo.</div>
                </div>
                               <script>
                    document.getElementById('response').addEventListener('click', function () {
                        this.classList.add('hidden'); // Oculta el div completo al hacer clic
                    });
                </script> 
                
                ";
        }
    } catch (Exception $e) {
            echo "
                <div id='response' class='absolute w-screen h-full top-0 left-0 flex flex-col items-center justify-center' style='z-index: 100;background-color: rgba(0,0,0,0.5);'>
                    <div class='bg-orange text-white p-6 rounded-lg shadow-lg w-10/12 lg:w-3/12 text-center'>Error: {$mail->ErrorInfo}</div>
                </div>
                                <script>
                    document.getElementById('response').addEventListener('click', function () {
                        this.classList.add('hidden'); // Oculta el div completo al hacer clic
                    });
                </script>
                
                ";
    }
}
?>