<?php

// PHP code goes here - this is a comment

if ($_POST){
	// we have form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$from = 'My contact form';
	$to = 'philipfnelms@gmail.com';
	$subject = 'Message from my contact form';

	$body = "Hi, we've had a form submission.\n From: $name\n Email: $email\n Phone: $phone\n Message: $message";

	// format the data into a message
	$email_message = "Hi, we've had a form submission, see it below.";
	$email_message = $email_message . "Name " . $_POST['name'];

	// now send email
	if (mail($to, $subject, $body)) {
		$result='<div class="alert alert-success">Thankyou!</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry. Error.</div>';
	}

	// now forward user to thank you page
	header("Location: thank-you.html");
	exit;
}
?>
