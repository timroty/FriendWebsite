<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'website@tedbordeau.com';
$email_subject = 'New Website Submission';
$email_body = "Name: $name\n".
            "Email: $visitor_email.\n";
            "Message: $message.\n";

$to = "timroty13@gmail.com";
$headers = "Reply-To: $visitor_email \r\n";

if (@mail($to,$email_subject,$email_body,$headers))
{
    echo 'The message has been sent.';
}else{
    echo 'failed';
}
\?>
