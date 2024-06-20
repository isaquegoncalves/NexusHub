<?php

$to = 'isaquebrandao32@gmail.com';

if ($_POST['email'] != null) {
    $email = $_POST['email'];
    echo '<br>Campo Email: ' . $email;
}

$subject = 'Email da NexusHub';

if ($_POST['textarea'] != null) {
    $message = $_POST['textarea'];
    echo '<br>Mensagem inserida: ' . $message;
}

$headers = 'From: '. $email . "\r\n" . 'Reply-To: isaquebrandao32@gmail.com';

echo '<br> ' . $to;
echo '<br> ' . $subject;
echo '<br> ' . $message;
echo '<br> ' . $headers;

mail($to, $subject, $message, $headers);