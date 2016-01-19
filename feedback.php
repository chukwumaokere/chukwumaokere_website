<?php
/*
include  'feedback.html';
$name=$_POST['name'];
$email_from = $_POST['email'];
$comment=$_POST['comment'];

$email_to = "chuwkumamokere@yahoo.com";

$email_subject = "Feedback from chukwumaokere.com";

$email_message = "Form details below.\n\n";
$email_message .= "First Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Comment: ".clean_string($comment)."\n";

$headers = 'From: '.$email_from."\r\n".

		'Reply-To: '.$email_from."\r\n" .

		'X-Mailer: PHP/' . phpversion();

mail($email_to, $email_subject, $email_message, $headers);
*/
header("location:./thankyou.html");