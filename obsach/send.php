<?php
$fio = $_POST['username'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);

if (mail("cto@appsidedev.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: ydemov1@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>