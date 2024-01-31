<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'parascheinian@gmail.com';
    $mail->Password = 'fzbafnsipwozelfv';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';

    $mail->setFrom('parascheinian@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["name"];

    $mail->Body = $_POST["message"];

    echo
    "
    <script>
        alert('Sent Succesfully');
        document.location.href = 'index.php';
    </script>
    ";
}
?>