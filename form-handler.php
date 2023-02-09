<?php
$name = $_POST['name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@hagetravelagency.com';

$email_subject = 'new form submission';

$email_body = "User name: $name.\n".
              "user Email: $visitor_email.\n".
              "subject: $subject.\n".
              "user message: $message .\n";

$to = 'liibaanbaashe809@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers );

header("location: content.html")

?>