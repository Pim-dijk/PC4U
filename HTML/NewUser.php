<?php

include("Includes/initialize.php");
// Escape user inputs for security


if(isset($_POST['register'])){
    //$user = new User();
    $database->escape_value($_POST['email']);

    // Check to see if a user exists with this e-mail
    $query = "SELECT email FROM customers WHERE email = '{$_POST['email']}'";
    //$database->query($query);
    $EmailExists = $database->query($query);
    if (!$EmailExists){
        $user->Email =  $_POST['email'];
        $salted = "8723687hdwuyu2ygeou78t127438crb78oet8".$_POST['password'];
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

        header("Location: index.php");
        exit();

    } else{
        $_SESSION["alert-type"] = "success";
        $_SESSION["alert-message"] = "Email already in Database";
        header("Location: Login.php");
    }
}

?>