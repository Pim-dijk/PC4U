<?php 
include("initialize.php");
?>
<?php

// Was the form submitted?
if (isset($_POST["forgotpassword"])) {
	
	// Harvest submitted e-mail address
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$email = $_POST["email"];
		
	}else{
		$_SESSION["alert-type"] = "success";
		$_SESSION["alert-message"] = "email is not valid";
		
	}
	$database->escape_value($email);

	// Check to see if a user exists with this e-mail
	$query = "SELECT email FROM customers WHERE email = '$email'";
	//$database->query($query);
	$userExists = $database->query($query);
	
	while($row = $userExists->fetch_assoc()){
		if (isset($row["email"])){
		
			
		// Create a unique salt. This will never leave PHP unencrypted.
		$salt = "8723687hdwuyu2ygeou78t127438crb78oet8";

		// Create the unique user password reset key
		$password = hash('sha512', $salt.$row["email"]);
		// Create a url which we will direct them to reset their password
		$pwrurl = "http://127.0.0.1:8080/PHP/HTML/resetpassword.php?q=".$password;
			// Mail them their key
		$mailbody = "Dear user,\n\nIf this e-mail does not apply to you please ignore it. It appears that you have requested a password reset at our website www.yoursitehere.com\n\nTo reset your password, please click the link below. If you cannot click it, please paste it into your web browser's address bar.\n\n" . $pwrurl . "\n\nThanks,\nThe Administration";
		
		$AdminEmail = "zanaabdu@live.nl";	
			
			$headers = "From: " . $AdminEmail . " \r\n";
            $headers .= "Reply-To: " . $AdminEmail . " \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			$subject = "www.PC4U.com - Password Reset";

            $message = 'Van: ' . $name . '</br></br>';
            $message .= 'Email: ' . $email . '</br></br>';
            $message .= 'Bericht: ' . $messageC . '</br></br>';
            $message .= 'Telefoonnummer: ' . $number . '</br></br>';

            $sent = mail($email, $subject, $mailbody, $headers);
	
		
		echo "Your password recovery key has been sent to your e-mail address.";
		
		
	//	 header("Location: resetpassword.php?q=$password");
		 
	}
	else{
		header("Loaction: Login.php");
		$_SESSION["alert-type"] = "success";
		$_SESSION["alert-message"] = "No user with that email has been found, go fuck yourself";
	}
	}
	
}
?>