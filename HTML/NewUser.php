<?php
include("Header.php");
include("initialize.php");
// Escape user inputs for security


    if(isset($_POST['register'])){
		//$user = new User();
		
			$user->Email =  $_POST['email'];
			$salted = "8723687hdwuyu2ygeou".$_POST['password']."78t127438crb78oet8";
			$hashed = hash("sha512", $salted);
			$user->Password = $hashed;
			$user->Initials = $_POST['initials'];
			$user->Prefix = $_POST['prefix'];
			$user->Lastname = $_POST['lastname'];
			$user->Street = $_POST['straat'];
			$user->HouseNumber = $_POST['housenumber'];
			$user->Addition = $_POST['addition'];
			$user->City = $_POST['city'];
			$user->Zipcode = $_POST['zipcode'];
			$user->PhoneNumber = $_POST['phonenumber'];
			$user->Country = $_POST['Country'];
			$user->DOB = $_POST['DOB'];

		
		$user->create();
		
		header("Location: home.php");
		exit();
    }

include("Footer.php");
 ?>