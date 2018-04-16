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
    $date = date("Y-m-d");

    //Obsolete
    //Check if the product already has a discount
//    $query = "SELECT * FROM discounts WHERE ProductID = $product->ProductID";
//    $discounts = $discount->find_by_sql($query);

    //Set discount object to the first one found in the array of objects
    //The object can be empty
//    if(!empty($discounts)) {
//        $discount = $discounts[0];
//    }

    //If the $discount has an id, update that discount with the new values
//    if(!empty($discount->DiscountID))
//    {
//        $discount->id = $discount->DiscountID;
//        $discount->DiscountID = $discount->DiscountID;
//        $discount->NewPrice = $_POST['NewPrice'];
//        $discount->ExpirationDate = $_POST['ExpirationDate'];
//        $discount->update();
//
//        $_SESSION["alert-type"] = "success";
//        $_SESSION["alert-message"] = "Aanbieding succesvol bijgewerkt!";
//    }
//    else
//    {
        //Use the newly gotten product ID to create a discount object and store it in the database
        $discount->ProductID = $product->ProductID;
        $discount->NewPrice = $_POST['NewPrice'];
        $discount->FromDate = $date;
        $discount->ExpirationDate = $_POST['ExpirationDate'];

        if($discount->create()){
            $_SESSION["alert-type"] = "success";
            $_SESSION["alert-message"] = "Aanbieding succesvol aangemaakt!";
        }

//    }
}

//Create a new category
if(isset($_POST['submitCategory'])){

    $category->Category = $_POST['Category'];
    $property1 = $_POST['Property1'];
    $property2 = $_POST['Property2'];
    $object = array( "fields" => [array("key" => "$property1", "value" => ""), array("key" => "$property2", "value" => "")]);
    $json = json_encode($object);
    $category->Properties = $json;

    if(($_FILES["upload_file"]["name"][0]) != "")
    {
        for($i=0; $i < count($_FILES["upload_file"]["name"]); $i++)
        {
            $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
            $folder="images/Categories/";
            move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "$folder".$_FILES["upload_file"]["name"][$i]);

            $category->Path = "$folder".$_FILES["upload_file"]["name"][$i];
        }
    }

    if($category->create()){
        $_SESSION['alert-type'] = "success";
        $_SESSION['alert-message'] = "Categorie succesvol aangemaakt!";
    }
    else{
        $_SESSION['alert-type'] = "warning";
        $_SESSION['alert-message'] = "Er is iets fout gegaan bij het aanmaken van de categorie!";
    }
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
    }
}


//Edit a products data
if(isset($_POST['EditProduct']))
{
    $id = $_POST['ProductID'];
    $product->id = $id;
    $product->ProductID = $id;
    $product->ArtNumber = $_POST['ArtNumber'];
    $product->ArtName = $_POST['ArtName'];
    $product->Price = $_POST['Price'];
    $product->Description = $_POST['Description'];
    $product->CategoryID = $_POST['Category'];
    $product->Brand = $_POST['Brand'];
    $product->Availability = 0;
    $product->Property1 = $_POST['Property1'];
    $product->Property2 = $_POST['Property2'];
    $product->update();

    //The featured image
    $featuredImage = $_POST['featuredImage'];

    if(($_FILES["upload_file"]["name"][0]) != "")
    {
        for($i=0; $i < count($_FILES["upload_file"]["name"]); $i++)
        {
            $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
            $folder="images/Products/";
            move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "$folder".$_FILES["upload_file"]["name"][$i]);

            $image->ProductID = $id;
            $image->Location = "$folder".$_FILES["upload_file"]["name"][$i];
            $image->create();
        }
    }

    // Get all the images for the product after they have all been added
    $query = "SELECT * FROM Images WHERE ProductID = $product->ProductID";
    $images = $image->find_by_sql($query);

    foreach($images as $image)
    {
        $image->id = $image->ImageID;
        if(basename($image->Location) == $featuredImage)
        {
            $image->Featured = 1;
        }
        else
        {
            $image->Featured = 0;
        }
        $image->update();
    }

    $_SESSION["alert-type"] = "success";
    $_SESSION["alert-message"] = "Product succesvol bijgewerkt!";
}

header("Location: Admin.php"); /* Redirect browser */
exit();

?>