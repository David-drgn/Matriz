<?php
$to      = 'brunamqs82@gmail.com';
$subject = 'david.raphael.gustavo@gmail.com';
$message = 'hello';
$headers = array(
    'From' => 'david.raphael.gustavo@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);