<?php
    include 'Header.php';

    if ( isset($_POST['Category']) && isset($_POST['Artnr']) && isset($_POST['Artname']) && isset($_POST['Description']) && isset($_POST['Price']) ) {
        $product->CategoryID = $_POST['Category'];
        $product->ArtNumber = $_POST['Artnr'];
        $product->ArtName = $_POST['Artname'];
        $product->Description = $_POST['Description'];
        $product->Price = $_POST['Price'];
        if ( $_POST['Category'] == 1 ) {
            $product->Property1 = $_POST['Property1Processor'];
            $product->Property2 = $_POST['Property2Processor'];
        } elseif ( $_POST['Category'] == 2 ) {
            $product->Property1 = $_POST['Property1Harddisk'];
            $product->Property2 = $_POST['Property2Harddisk'];
        } elseif ( $_POST['Category'] == 3 ) {
            $product->Property1 = $_POST['Property1Housing'];
            $product->Property2 = $_POST['Property2Housing'];
        } elseif ( $_POST['Category'] == 4 ) {
            $product->Property1 = $_POST['Property1Laptop'];
            $product->Property2 = $_POST['Property2Laptop'];
        }
        $product->create();

        $artNr = $_POST['Artnr'];
        $sql = "SELECT * FROM products WHERE ArtNumber=$artNr";
        $result = $database->query($sql);
        $row = $database->fetch_array($result);
        $id = $row['ProductID'];
    
        
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