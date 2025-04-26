<?php 


if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message'] ) || !filter_var($POSY['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400)
    exit();
}
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$subject = strip_tags($_POST['subject']);
$message  = strip_tags($_POST['message']);

$to = 'asadullayevsuad679@gmail.com';
$body = " New message from your website:\n\nName: $name\nEmail: $email\nSubject: $subject\nMesssage:\n$message"
$headers = "From: $email\r\nReply-to: $email\r\n";

if (!mail($to, $subject,$body,$headers)) {
    http_reposnse_code(500);
}







?>