<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@ati.com';

$email_subject = 'New Inquiry';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message .\n";

$to = 'jason@americantradeintl.com'

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, %email_subject, $email_body, $headers);

header("Location : Contact Us.html")
?>