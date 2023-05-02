<?php
$name=$_post['name'];
$visitors_email=$_post['email'];
$subject=$_post['subject'];
$message=$_post['message'];

$email_form='info@yourwebsite.com';

$email_subject='New Form Submmission';

$email_body="User Name:$name.\n".
            "User Email:$visitors_email.\n".
            "Subject:$subject.\n".
            "User Message:$message.\n";
$to ="riteshkumar6754@gmail.com";

$headers="Form:$email_form \r\n";

$headers ="Reply-To:$visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>
