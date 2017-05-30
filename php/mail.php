<?php
/**
 * Created by PhpStorm.
 * User: Dancan
 * Date: 5/19/2017
 * Time: 5:29 PM
 */
require 'PHPMailer/PHPMailerAutoload.php';



    /**
     * This example shows settings to use when sending via Google's Gmail servers.
     */

    date_default_timezone_set('Etc/UTC');
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 25;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "dancankimani70@gmail.com";
    $mail->Password = "D1A1N1KIM";


    //Set who the message is to be sent from
    $mail->setFrom('dancankimani70@gmail.com', '');
    //Set who the message is to be sent to
    $mail->addAddress('dancankimani70@yahoo.com', '');
    //Set the subject line
    $mail->Subject = 'PHPMailer GMail SMTP test';

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //send the message, check for errors
    if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }



?>