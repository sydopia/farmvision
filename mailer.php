<?php
if(isset($_POST['submit'])){
$to = "sydopia@gmail.com";
$subject = "Contact Form";

//date the visitor provided

$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$message_field = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

//constructing the message

$body = "Name: $name_field\n\n
Email: $email_field\n\n
Message:\n\n $message_field";

//and it's off!

mail ($to, $subject, $body, $mailheader);

//redirect to confirmation
header ('Location: confirm.html');
}
?>