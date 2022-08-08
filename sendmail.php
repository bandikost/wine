<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';


    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'PHPmailer/language/');
    $mail->IsHTML(true);


    $mail->setFrom('info@wine.io', 'Wine');
    $mail->addAddress('code@wine.io');

    $mail->Subject = 'Добрый день, хочу продегустировать ваше вино!';



    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($reponse);



?>

