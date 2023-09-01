<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\PHPExtention;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

//От кого письмо
$mail->setForm('olimpus@fls.guru', 'Обратный звонок');
//Кому отправить
$mail->addAddres('agapovdanya@yandex.ru')
//Тема письма
$mail->Subject = 'Пришла заявка на обратный звонок'

//Тело письма
$body = '<h1> Форма:</h1>';
$body .= '<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
$body .= '<p><strong>Телефон:</strong> '.$_POST['number'].'</p>';

$mail->Body = $body;

//отправляем
if(!$mail->send()){
    $messange = 'Ошибка!':
} else {
    $messange = 'Данные отправлены.';
}

$response = ['message' => $messange];

header('Content-type: application.json');
echo json_encode($response);
    ?>