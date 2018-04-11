<?php
session_start();
include 'Includes/initialize.php';


//Add/modify discount
if(isset($_POST['submitDiscount']))
{
    //Get product object that belongs to the selected product name
    $ArtName = $_POST['ArtName'];
    $query = "SELECT * FROM products WHERE ArtName = '$ArtName'";
    $products = $product->find_by_sql($query);
    $product = $products[0];

    //Check if the product already has a discount
    $query = "SELECT * FROM discounts WHERE ProductID = $product->ProductID";
    $discounts = $discount->find_by_sql($query);

    //Set discount object to the first one found in the array of objects
    //The object can be empty
    if(!empty($discounts)) {
        $discount = $discounts[0];
    }

    //If the $discount has an id, update that discount with the new values
    if(!empty($discount->DiscountID))
    {
        $discount->id = $discount->DiscountID;
        $discount->DiscountID = $discount->DiscountID;
        $discount->NewPrice = $_POST['NewPrice'];
        $discount->ExpirationDate = $_POST['ExpirationDate'];
        $discount->update();

        $_SESSION["alert-type"] = "success";
        $_SESSION["alert-message"] = "Aanbieding succesvol bijgewerkt!";
    }
    else
    {
        //Use the newly gotten product ID to create a discount object and store it in the database
        $discount->ProductID = $product->ProductID;
        $discount->NewPrice = $_POST['NewPrice'];
        $discount->ExpirationDate = $_POST['ExpirationDate'];
        $discount->create();

        $_SESSION["alert-type"] = "success";
        $_SESSION["alert-message"] = "Aanbieding succesvol aangemaakt!";
    }

    header("Location: Admin.php"); /* Redirect browser */
    exit();
}

//Create a new category
if(isset($_POST['submitCategory'])){

    $category->Category = $_POST['Category'];
    $property1 = $_POST['Property1'];
    $property2 = $_POST['Property2'];
    $object = array( "fields" => [array("key" => "$property1", "value" => ""), array("key" => "$property2", "value" => "")]);
    $json = json_encode($object);
//    var_dump($json);
//    exit;
    $category->Properties = $json;
    if($category->create()){
        echo $category->id;
        $_SESSION['alert-type'] = "succes";
        $_SESSION['alert-message'] = "Categorie succesvol aangemaakt!";
    }
    else{
        $_SESSION['alert-type'] = "warning";
        $_SESSION['alert-message'] = "Er is iets fout gegaan bij het aanmaken van de categorie!";
    }

    header("Location: Admin.php"); /* Redirect browser */
    exit();
}

//Create new Admin account
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