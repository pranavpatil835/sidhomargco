<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@sidhomargco.netlify.app';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"
              "User Email: $visitor_email.\n".
               "subject: $Subject.\n".
               "User Message: $message.\n";

$to = 'pranavpat835@gmail.com';

$headers = "From: $email_from \r\n";


mail($to,$email_subject,$email_body,$headers);


header("Location: contact.html");



?>