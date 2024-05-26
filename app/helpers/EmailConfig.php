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
        $mail->Subject = '' . $name . ', Gracias por comunicarte con Dr. Kewin Quispe de la Roca';
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('endocirugias@gmail.com', 'Dr. Kewin de la Roca');
        return $mail;
    }
}


/* sdadsfdsfsfsfsdsadasdafsfsa */