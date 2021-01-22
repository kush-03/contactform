<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$visitor_email= $_POST['email'];
		$message = $_POST['message'];


		$email_form= 'agarwalkush1999@gmail.com';
		$email_subject= "New Form Submission";

		$email_body = "Iser Name: $name.\n".
					"user Email: $visitor_email.\n".
						"User Message: $message.\n";

		$to = "agarwalkush1997@gmail.com";

		$headers= "Form: $email_from \r\n";

		$headers = "Reply-To: $visitor_email \r\n";

		if(mail($to,$email_subject,$email_body,$headers)){
			echo "<h1>Sent Successfully! Thankyou <h1>";
		}
		else{
			echo "Something went wrong";
		}

?>