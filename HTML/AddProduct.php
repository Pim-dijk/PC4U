<?php
    include 'Header.php';

    if (isset($_POST['addProduct'])) {
        $product->CategoryID = $_POST['Category'];
        $product->ArtNumber = $_POST['ArtNr'];
        $product->ArtName = $_POST['ArtName'];
        $product->Description = $_POST['Description'];
        $product->Price = $_POST['Price'];
        $product->Property1 = $_POST['Property1'];
        $product->Property2 = $_POST['Property2'];
        $product->create();

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
    }

    header("Location: Admin.php");
    exit();

    include 'Footer.php';
?>