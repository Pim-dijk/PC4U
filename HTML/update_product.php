<?php
include 'Includes/initialize.php';

if(isset($_POST['EditProduct']))
{
    $id = 1;
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


    header("Location: EditProduct.php"); /* Redirect browser */
    exit();
}

include 'Footer.php';
?>