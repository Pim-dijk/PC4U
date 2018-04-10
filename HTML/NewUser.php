<?php
session_start();
include "Includes/initialize.php";

// Escape user inputs for security
    if(isset($_POST['register'])){
		
			$customer->Email = $_POST['email'];
			$salted = "8723687hdwuyu2ygeou".$_POST['password']."78t127438crb78oet8";
			$hashed = hash("sha512", $salted);
			$customer->Password = $hashed;
			$customer->Initials = $_POST['initials'];
			$customer->Prefix = $_POST['prefix'];
			$customer->Lastname = $_POST['lastname'];
			$customer->Street = $_POST['straat'];
			$customer->HouseNumber = $_POST['housenumber'];
			$customer->Addition = $_POST['addition'];
			$customer->City = $_POST['city'];
			$customer->Zipcode = $_POST['zipcode'];
			$customer->PhoneNumber = $_POST['phonenumber'];
			$customer->Country = $_POST['Country'];
			$customer->DOB = $_POST['DOB'];
			$customer->Business = $_POST['Business'];

		
		if($customer->create())
		{
            $_SESSION["alert-type"] = "success";
            $_SESSION["alert-message"] = "Uw account is succesvol aangemaakt, u kunt nu inloggen!";

            header("Location: Login.php");
            exit();
        }
        else
        {
            $_SESSION["alert-type"] = "error";
            $_SESSION["alert-message"] = "Er is iets fout gegaan bij het aanmaken van uw account!";

            header("Location: Index.php");
            exit();
        }
    }
 ?>