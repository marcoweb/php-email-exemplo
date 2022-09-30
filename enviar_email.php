<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$status = null;

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'marcocarvalho.web@gmail.com';
    $mail->Password = 'bqgzjdmkzleoychk';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($email, $nome);
    $mail->addAddress('marco.carvalho9@etec.sp.gov.br', 'Marco Carvalho');

    $mail->isHTML(true);
    $mail->Subject = 'Formulário de contato';
    $mail->Body = $mensagem;

    $mail->send();
    echo "Mensagem Enviada";
} catch (Exception $e) {
    echo "Mensagem não pode ser enviada. " . $mail->ErrorInfo;
}
?>
<h1>Nome</h1>
<?= $nome ?>
<h1>Email</h1>
<?= $email ?>
<h1>Mensagem</h1>
<?= $mensagem ?>