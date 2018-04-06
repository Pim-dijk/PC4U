<?php
include 'Header.php';

?>

<!--jQuery script for uploading and previewing multiple images-->
<script>

function preview_image()
{
    //Get the number of images the user selected
    var total_file=document.getElementById("upload_file").files.length;
    console.log(document.getElementById("upload_file").files.item(0).name);
    //foreach image create an image and aad a <br>
    for(var i=0;i<total_file;i++)
    {
        $('#image_data').append("<div class='col-sm-4 col-xs-12'>"
        +"<input type='radio' name='featuredImage' value='"+(document.getElementById("upload_file").files.item(i).name)+"' >"
        +"<img src='"+URL.createObjectURL(event.target.files[i])+"'>"
        +"</div>");
    }
}

</script>


<?php

    //Get the ID from the product session (the page that linked to this)
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
    $PropertyLabel1 = $decoded_json['0']["key"];
    $PropertyLabel2 = $decoded_json['1']["key"];

    //Get the images from the product
    $query = "SELECT * FROM Images WHERE ProductID = $product->ProductID";
    $images = $image->find_by_sql($query);

    $image = $images[0];

    // Get a list of categories
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
                    <label for="Brand">Merk</label>
                    <input type="text" class="form-control" id="Brand" name="Brand" placeholder="Merk" value="<?php echo $product->Brand ?>" required>
                </div>
                <div class="form-group col-sm-3 col-xs-12">
                    <label for="Price">Prijs</label>
                    <input type="number" class="form-control" id="Price" step="any" min="0" name="Price" placeholder="Prijs" value="<?php echo $product->Price ?>" required>
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="Category">Categorie</label>
                    <select class="form-control" id="Category" name="Category" required>
                        <?php

                        while ($row = $categories->fetch_assoc()) {
                            if(!isset($CategoryID))
                            {
                                if($row['CategoryID'] == $product->CategoryID)
                                {
                                    echo '<option value="'.$row['CategoryID'].'" selected>'.$row['Category'].'</option>';
                                }
                                else
                                {
                                    echo '<option value="'.$row['CategoryID'].'">'.$row['Category'].'</option>';
                                }
                            }
                            else
                            {
                                if($row['CategoryID'] == $CategoryID)
                                {
                                    echo '<option value="'.$row['CategoryID'].'" selected>'.$row['Category'].'</option>';
                                }
                                else
                                {
                                    echo '<option value="'.$row['CategoryID'].'">'.$row['Category'].'</option>';
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
<!--Foreach Property of the category, create a inputfield-->
                <div class="form-group">
                    <label for="Property1" class="propertyLabel1"><?php echo $PropertyLabel1;?></label>
                    <input type="text" value="<?= $product->Property1 ?>" id="Property1" name="Property1" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="Property2" class="propertyLabel2"><?php echo $PropertyLabel2;?></label>
                    <input type="text" value="<?= $product->Property2 ?>" id="Property2" name="Property2" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="Description">Beschrijving</label>
                    <textarea type="text" class="form-control textAreaInput" id="Description" name="Description" placeholder="Beschrijving" required><?php echo $product->Description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="UploadFile">Afbeelding(en) toevoegen</label>
                    <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
                    <p class="help-block">Selecteer hier de afbeeldingen voor bij het product</p>
                </div>

                <div id="image_data" class="row">
                    <?php
                        if(!empty($image))
                        {
                            for($i=0; $i<count($images); $i++)
                            {
                                echo "<div class='col-sm-4 col-xs-12'>";
                                    echo "<input type='radio' id='featuredImage' name='featuredImage' value='" . basename($images[$i]->Location) . "'";
                                    echo $images[$i]->Featured == 1 ? "checked = checked >": ">";
                                    echo "<img src=" . $images[$i]->Location . ">";
                                    echo "<a href='DeleteImage.php?id=". $images[$i]->ImageID ." '>verwijder afbeelding</a>";
                                echo "</div>";
                            }
                        }
                    ?>
                </div>

                <button type="submit" class="btn btn-default pull-left" name="EditProduct">Toepassen</button>

            </form>
            <!--/Add product-->
        </div>

    </div>

    <!--/End Content-->

<?php
include 'Footer.php';
?>