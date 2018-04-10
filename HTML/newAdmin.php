<?php
session_start();
include "Includes/initialize.php";

// Escape user inputs for security
if(isset($_POST['RegisterAdmin'])){

    $admin->Email = $_POST['email'];
    $salted = "8723687hdwuyu2ygeou".$_POST['password']."78t127438crb78oet8";
    $hashed = hash("sha512", $salted);
    $admin->Password = $hashed;

    if($admin->create())
    {
        $_SESSION["alert-type"] = "success";
        $_SESSION["alert-message"] = "Het admin account is succesvol aangemaakt, u kunt hier nu mee inloggen!";

        header("Location: Admin.php");
        exit();
    }
    else
    {
        $_SESSION["alert-type"] = "error";
        $_SESSION["alert-message"] = "Er is iets fout gegaan bij het aanmaken van het account!";

        header("Location: Admin.php");
        exit();
    }
}
?>