<?php
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
    if(!empty($discounts)){
        $discount = $discounts[0];

        if(!empty($discount))
        {

            $discount->id = $discount->ProductID;
            $discount->NewPrice = $_POST['NewPrice'];
            $discount->ExpirationDate = $_POST['ExpirationDate'];
            $discount->update();
        }
        else
        {
            //Use the newly gotten product ID to create a discount object and store it in the database
            $discount->ProductID = $product->ProductID;
            $discount->NewPrice = $_POST['NewPrice'];
            $discount->ExpirationDate = $_POST['ExpirationDate'];
            $discount->create();
        }
    }
}

header("Location: Admin.php"); /* Redirect browser */
exit();

?>