<?php
if (!empty($_POST['email'])) 
{
		$email = $_POST['email'];
		if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
		{
			$to = "any.email@company.com"; /*replace with your email*/
			$subject = "Save this to launch announcement email list.";
			$headers = "From: {$email}\r\n";
			$headers .= "Reply-To: {$email}\r\n";
			$headers .= "Return-Path: {$email}\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$message = '
			A user has subscribed to launch announcement email list. Please save this email address.
			Email: '.$email.'
			';
			if (mail($to, $subject, $message, $headers)) {
			    echo "<label class=\"added\" for=\"email\" generated=\"true\"> Your address has been added. </label>";
			}
		}
		else 
		{
		 echo "<label class=\"error\" for=\"email\" generated=\"true\"> Please enter a valid email address. </label>";
		}
}
else
{
   echo "<label class=\"error\" for=\"email\" generated=\"true\"> Please enter your email address. </label>";
}
?>
