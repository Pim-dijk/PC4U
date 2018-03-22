<?php include 'Header.php';

    //If image preview is on, hide the other images
    $image_preview = 0;
?>

<!--jQuery script for uploading and previewing multiple images-->
<script>

$(document).ready(function()
    {
    $('form').ajaxForm(function()
    {
        alert("Uploaded SuccessFully");
    });
});

function preview_image()
{
    //Get the number of images the user selected
    var total_file=document.getElementById("upload_file").files.length;
    //foreach image create an image and aad a <br>
    for(var i=0;i<total_file;i++)
    {
        $('#image_data').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
    }
    $image_preview = 1;
}

function retrieve_category()
{
    var categoryID = document.getElementById("Category");
}

</script>


<?php

    //Get the ID from the product session (the page the linked to this)
    $ProductID = 1;
    //Get the information from the database
    $query = "SELECT * FROM Products WHERE ProductID = $ProductID";
    $result = $product->find_by_sql($query);
    //First product in array, returns objects in array
    $product = $result[0];
    //Get the category name associated from the category table
    $query = "SELECT * FROM Categories WHERE CategoryID = $product->CategoryID";
    $result = $category->find_by_sql($query);
    $category = $result[0];
    $json = $category->Properties;
    $decoded_json = json_decode($json,true)["fields"];
//    print_r($decoded_json);
//    exit;
    //Get the images from the product
    $query = "SELECT * FROM Images WHERE ProductID = $product->ProductID";
    $images = $image->find_by_sql($query);

    $image = $result[0];


//    Get a list of categories
    $categories = $database->query("SELECT * FROM categories");


?>

    <!--Content-->

    <div id="Admin" class="content">
        <h1>Admin Panel</h1>
        <hr>

        <div id="EditProduct" class="row">
            <h3>Product wijzigen</h3>

            <form id="editForm" class="center-block myForm needs-validation" action="update_product.php" method="POST" name="EditProduct" enctype="multipart/form-data">
                <div class="form-group col-sm-4 col-xs-12">
                    <label for="ArtNumber">Artikelnummer</label>
                    <input type="text" class="form-control" id="ArtNumber" name="ArtNumber" placeholder="ArtikelNummer" value="<?php echo $product->ArtNumber ?>" required>
                </div>
                <div class="form-group col-sm-8 col-xs-12">
                    <label for="ArtName">Artikelnaam</label>
                    <input type="text" class="form-control" id="ArtName" name="ArtName" placeholder="Artikelnaam" value="<?php echo $product->ArtName ?>" required>
                </div>
                <div class="form-group col-sm-3 col-xs-12">
                    <label for="Price">Prijs</label>
                    <input type="number" class="form-control" id="Price" name="Price" placeholder="Prijs" value="<?php echo (int)$product->Price ?>" required>
                </div>
                <div class="form-group col-sm-9 col-xs-12">
                    <label for="Category">Categorie</label>
                    <select class="form-control" id="Category" name="Category" onchange="retrieve_category();" required>
                        <?php

                        while ($row = $categories->fetch_assoc()) {
                            if($row['CategoryID'] == $product->CategoryID)
                            {
                                echo '<option value="'.$row['CategoryID'].'" selected>'.$row['Category'].'</option>';
                            }
                            else
                            {
                                echo '<option value="'.$row['CategoryID'].'">'.$row['Category'].'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
<!--Foreach Property of the category, create a inputfield-->
                <?php
                foreach($decoded_json as $value)
                {
                ?>
                    <div class="form-group">
                        <label for="<?=$value["key"]?>"><?=$value["key"]?></label>
                        <<?=$value["is_text_area"] == 1 ? "textarea": "input"?> type="text" value="<?=$value["value"]?>" id="<?=$value["key"]?>" class="form-control"><?=$value["is_text_area"] == 1 ? "</textarea>": ""?>
                    </div>
                <?php
                }
                ?>

                <div class="form-group">
                    <label for="Description">Beschrijving</label>
                    <textarea type="text" class="form-control textAreaInput" id="Description" name="Description" placeholder="Beschrijving" required><?php echo $product->Description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="UploadFile">Afbeelding(en) toevoegen</label>
                    <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
                    <p class="help-block">Selecteer hier de afbeeldingen voor bij het product</p>
                </div>

                <button type="submit" class="btn btn-default" name="EditProduct">Wijzigen</button>
            </form>

            <div id="image_data">
                <?php
                    if(!empty($image))
                    {
                        for($i=0; $i<count($images); $i++)
                        {
                            echo "<div class='col-sm-4 col-xs-12'>";
                                echo "<img src=" . $images[$i]->Location . ">";
                                echo "<a href='DeleteImage.php?id=". $images[$i]->ImageID ." '>verwijder</a>";
                            echo "</div>";
                        }
                    }
                ?>
            </div>

            <!--/Add product-->
        </div>

    </div>

    <!--/End Content-->

<?php include 'Footer.php' ?>