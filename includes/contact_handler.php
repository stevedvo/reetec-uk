<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];

	$mail_to = "info@reetec-uk.com";

	$body_message = "From: ".$name."\n";
	$body_message .= "E-mail: ".$email."\n";
	$body_message .= "Message: ".$message;

	$headers = "From: ".$email."\r\n";
	$headers .= "Reply-To: ".$email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_status)
	{
?>
		<script language="javascript" type="text/javascript">
		// Print a message
		alert('Thank you for you enquiry. We will be in touch shortly.');
		// Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
		window.location = '../index.php';
		</script>
<?php
	}
	else
	{
?>
		<script language="javascript" type="text/javascript">
		// Print a message
		alert('Apologies, message sending failed. Please send an email to info@reetec-uk.com');
		// Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
		window.location = '../contact.php';
		</script>
<?php
	}
?>