Perfect, in that case will use the SMTP data from titan to configure it, this would be the data:
﻿
﻿Outgoing server (SMTP): smtp.titan.email
﻿Port: 465
﻿Encryption: SSL
Or you could also use this one for SMTP:
Outgoing server (SMTP): smtp.titan.email
﻿Port: 587
﻿Encryption: STARTTLS
﻿
﻿Username = Your email account
﻿Password= Your email account password

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.titan.email';
$mail->Port = 587;
$mail->Encryption = starttls;
$mail->SMTPAuth = true;
$mail->Username = 'support@manual.appprocedure.com';
$mail->Password = 'manual123';
$mail->setFrom('support@manual.appprocedure.com', 'By expido');
$mail->addReplyTo('support@manual.appprocedure.com', 'Toniastore.com Order page');
$mail->addAddress('support@appprocedure.com', 'Toniastore.com Order');
$mail->Subject = 'Toniastore Order';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->isHTML(true);
$mail->Body = '<h2 style=" background-color:#e002bb;padding: 10px;">Toniastore Order Just Came In.</h2><hr><br>You have received an order from.<br><br> Please Angel there is an order, so check your Admin page order list...This order has already be paid ONLINE.<br><br> <img src="cid:logo" style="width:100px; height:100px;">';
//$mail->addAttachment('../img/logo.jpg');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}