<?php
session_start();
include 'Includes/initialize.php';


if(isset($_POST['discount']))
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
?>