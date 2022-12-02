<?php
$to      = 'rodrigo.cunha@shazam.pt';
$subject = 'teste de email servidor abc';
$message = 'Olá cá estou eu o brise continuo, blá blá';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$send = mail($to, $subject, $message, $headers);
if ($send) {
echo 'Enviou';} else {
echo 'Não enviou';}
?>