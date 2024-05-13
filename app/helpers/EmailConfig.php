<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static  function config($name): PHPMailer
    {
        
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'endocirugias@gmail.com';
        $mail->Password = 'idcmqvwnrfifbxnm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = '' . $name . ', Gracias por comunicarte con Doctor Kewin';
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('endocirugias@gmail.com', 'Doctor Kewin');
        return $mail;
    }
}


/* sdadsfdsfsfsfsdsadasdafsfsa */