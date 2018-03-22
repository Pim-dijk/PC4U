<?php

include 'Header.php';

if(isset($_POST['EditProduct']))
{
    $id = 1;
    $product->ProductID = $id;
    $product->ArtNumber = $_POST['ArtNumber'];
    $product->ArtName = $_POST['ArtName'];
    $product->Price = $_POST['Price'];
    $product->Description = $_POST['Description'];
    $product->CategoryID = $_POST['Category'];
    $product->update();

    for($i=0;$i<count($_FILES["upload_file"]["name"]);$i++)
    {
        $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
        $folder="images/Products/";
        move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "$folder".$_FILES["upload_file"]["name"][$i]);

        $image->ProductID = $id;
        $image->Location = "$folder".$_FILES["upload_file"]["name"][$i];
        $image->create();
    }
    header("Location: EditProduct.php"); /* Redirect browser */
    exit();
}

include 'Footer.php';
?>