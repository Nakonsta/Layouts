<?php
if ($_POST)
{

require_once 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// От кого
$mail->setFrom("no-reply@".$_SERVER['HTTP_HOST'], 'Новая заявка');        

// Кому
$mail->addAddress('megaminsk@inbox.ru', '');
// Тема письма
$mail->Subject = "3D Сход-развал";


$message = $_POST['html'];



// Тело письма
$body = $message;
$mail->msgHTML($body);


if ($mail->send())
{

}

}
?>