<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'calgary-guide.ca';
$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"Subject: $subject.\n".
				"User Message: $message.\n";

$to = "Roshan.shrestha@edu.sait.ca";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_body,$headers);

header("Location: contact.html")

?>
<!--referenced from https://html.form.guide/email-form/php-form-to-email/ --->