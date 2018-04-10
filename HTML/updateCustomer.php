<?php
session_start();
include 'Includes/initialize.php';

//If the user
if(isset($_POST['submit']))
{
    $customer->id = $_POST['CustomerID'];
    $customer->CustomerID = $_POST['CustomerID'];
    $customer->Email = $_POST['Email'];
    $customer->Initials = $_POST['Initials'];
    $customer->Prefix = $_POST['Prefix'];
    $customer->Lastname = $_POST['Lastname'];
    $customer->Street = $_POST['Street'];
    $customer->HouseNumber = $_POST['HouseNumber'];
    $customer->Addition = $_POST['Addition'];
    $customer->City = $_POST['City'];
    $customer->Zipcode = $_POST['Zipcode'];
    $customer->Country = $_POST['Country'];
    $customer->PhoneNumber = $_POST['PhoneNumber'];
    $customer->DOB = $_POST['DOB'];

    $id = $customer->CustomerID;

    //If succesfully updated, redirect to home with succes.
    if($customer->update())
    {
        $_SESSION["alert-type"] = "success";
        $_SESSION["alert-message"] = "Uw gegevens zijn succesvol bijgewerkt!";

    }
    //If no edit was made
    else
    {
        $_SESSION["alert-type"] = "warning";
        $_SESSION["alert-message"] = "Er zijn geen gegens bijgewerkt! Propeer het eventueel opnieuw.";
    }
    header("Location: Customer.php?id=".$id);
    exit;
}

?>