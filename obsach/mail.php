<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['username'];
$email = $_POST['email'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'ydemov1@mail.ru';
$mail->Password = 'iMOORey21ro-';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('ydemov1@mail.ru');
$mail->addAddress('yarosfkr@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку. Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>