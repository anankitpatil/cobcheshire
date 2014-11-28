<?php
$name = $_POST["InputName"];
$email = $_POST["InputEmail"];
$to = 'anankitpatil@gmail.com';
$subject = 'cobcheshire.com Registration Form';
$message = 'From: ' . $name . "\r\n" .
	'Email: ' . $email;
$headers = 'From: registration@cobcheshire.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
if(mail($to, $subject, $message, $headers)){
	echo 'Your registration enquiry has been mailed to us.';	
} else{
	echo 'Something went wrong. Please refresh the page and try again.';	
};
?> 