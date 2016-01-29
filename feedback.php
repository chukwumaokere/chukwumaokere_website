<?php
require 'PHPMailer/PHPMailerAutoload.php';

$comment = $_POST['comment'];
$email = $_POST['email'];
$name = $_POST['name'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.yahoo.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'chukwumaokere@Yahoo.com';                 // SMTP username
$mail->Password = 'Chuck2548';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('chukwumaokere@yahoo.com', $email);
$mail->addAddress('chukwumaokere@yahoo.com', 'Me');     // Add a recipient

$mail->addReplyTo($email, $name);


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Feedback from chukwumaokere.com';
$mail->Body    = $comment;
$mail->AltBody = $comment;

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	header("location:./thankyou.html");
}
