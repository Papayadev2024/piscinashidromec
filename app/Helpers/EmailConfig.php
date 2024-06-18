<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static  function config($name, $mensaje): PHPMailer
    {
        
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ventas@hidromecingenieros.com';
        $mail->Password = 'hidromec2024#';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = '' . $name . ', ' .$mensaje;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('diegomartinez1996x@gmail.com', 'Hidromec - Piscinas');
        return $mail;
    }
}


/* sdadsfdsfsfsfsdsadasdafsfsa */