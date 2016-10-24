<?php

// PHP code goes here - this is a comment

if ($_POST){
	// we have form data
	
	// format the data into a message
	$email_message = "Hi, we've had a form submission, see it below.";
	$email_message = $email_message . "Name " . $_POST['name'];
	
	// now send email
	mail("oliward@gmail.com", "Contact form enquiry", $email_message);
	
	// now forward user to thank you page
	header("Location: thank-you.html");
	exit;
}
?>