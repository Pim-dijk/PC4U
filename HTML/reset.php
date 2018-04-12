<?php
session_start();
include("Includes/initialize.php");

// Was the form submitted?
if (isset($_POST["ResetPasswordForm"]))
{
	// Gather the post data
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$hash = $_POST["q"];

	// Use the same salt from the forgot_password.php file
	$salt = "8723687hdwuyu2ygeou78t127438crb78oet8";
	
	// Generate the reset key
	$resetkey = hash('sha512', $salt.$email);

	
	// Does the new reset key match the old one?
	if (strcmp($resetkey, $hash) == 0)
	{
		if ($password == $confirmpassword)
		{
			//has and secure the password
			$password = hash('sha512', $salt.$password);
				
			// Update the user's password
				$query = "UPDATE customers SET password = '$password' WHERE email = '$email'";
				$database->query($query);
				
			$_SESSION["alert-type"] = "success";
		    $_SESSION["alert-message"] = "Your password has been successfully reset.";
			
			header("Location: Login.php");
			exit;
		}
		else{
		    $_SESSION["alert-type"] = "warning";
		    $_SESSION["alert-message"] = "Your password's do not match.";

            header("Location: resetpassword.php?q" . $hash);
            exit;
		}
	}
	else{
		$_SESSION["alert-type"] = "warning";
		$_SESSION["alert-message"] = "Your password reset key is invalid.";

        header("Location: Login.php");
        exit;
	}
}

?>