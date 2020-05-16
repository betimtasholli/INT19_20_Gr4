<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if(isset($_POST['send']))
{
    $emaili = $_POST['Email'];
    $subjekti = $_POST['Subjekti'];
    $mesazhi = $_POST['Mesazhi'];

    $mail = new PHPMailer();

    $mail->Host="smtp.gmail.com";

    $mail->isSMTP();

    $mail->SMTPAuth = true;

    //emaili dhe passwordi i derguesit
    $mail->Username="talkfootball41@gmail.com";
    $mail->Password="Messi6>5";

    $mail->SMTPSecure = "ssl";

    $mail->Port= "465";

    $mail->Subject = $subjekti;

    $mail->Body = $mesazhi;

    $mail->setFrom('talkfootball41@gmail.com');

    $mail->AddAddress($emaili);

    $mail->SMTPDebug = 0;
    $mail->IsHTML(true);

    //$mail->send();
}
    if(!$mail->send()){
        echo 'Emaili nuk u dergua!';
    }
    else{
        echo 'Emaili u dergua!';
        header('location:rrethnesh.php');
    }

    //$mail->smtpClose();
?>