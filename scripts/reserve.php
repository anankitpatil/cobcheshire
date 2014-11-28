<?php
$name = $_POST["InputName"];
$email = $_POST["InputEmail"];
$number = $_POST["InputNumber"];
$date = $_POST["datetimePicker"];
$guests = $_POST["InputGuests"];
$to = 'anankitpatil@gmail.com';
$subject = 'cobcheshire.com Reservation Form';
$message = 'From: ' . $name . "\r\n" .
	'Email: ' . $email . "\r\n" .
	'Phone number: ' . $number . "\r\n" .
	'Date and time (mm/dd/yyyy hh:mm am/pm): ' . $date . "\r\n" .
	'Number of guests: ' . $guests;
$headers = 'From: reservation@cobcheshire.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
if(mail($to, $subject, $message, $headers)){
	echo 'Your reservation enquiry has been mailed to us.';	
} else{
	echo 'Something went wrong. Please refresh the page and try again.';	
};
?> 