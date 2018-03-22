<?php include 'Header.php' ?>

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
//    Get the number of images the user selected
    var total_file=document.getElementById("UploadFile").files.length;
//    foreach image create an image and aad a <br>
    for(var i=0;i<total_file;i++)
 {
     $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
 }
}
</script>

<?php

    //Get the ID from the product session (the page the linked to this)
    $id = 1;
    //Get the information from the database
    $query = "SELECT * FROM Products WHERE ProductID = $id";
    $result = $product->find_by_sql($query);
    $product = $result[0];
    //Get the category name associated from the category table
    $query = "SELECT * FROM Categories WHERE CategoryID = $product->CategoryID";
    $result = $category->find_by_sql($query);
    $category = $result[0];
    //Get the images from the product
    $query = "SELECT * FROM Images WHERE ProductID = $product->ProductID";
    $result = $image->find_by_sql($query);
    $image = $result[0];

    if(isset($_POST['EditProduct']))
    {
        $product->ArtNumber = $_POST['ArtNumber'];
        $product->ArtName = $_POST['ArtName'];
        $product->Price = $_POST['Price'];
        $product->Description = $_POST['Description'];
        $product->Category = $_POST['Category'];
        $product->update();
    }

?>

    <!--Content-->

    <div id="Admin" class="content">
        <h1>Admin Panel</h1>
        <hr>

        <div id="EditProduct" class="row">
            <h3>Product wijzigen</h3>

            <form class="center-block myForm needs-validation" action="upload_file.php" method="POST" name="EditProduct" enctype="multipart/form-data">
                <div class="form-group col-sm-4 col-xs-12">
                    <label for="ArtNumber">Artikelnummer</label>
                    <input type="text" class="form-control" id="ArtNumber" placeholder="ArtikelNummer" value="<?php echo $product->ArtNumber ?>" required>
                </div>
                <div class="form-group col-sm-8 col-xs-12">
                    <label for="ArtName">Artikelnaam</label>
                    <input type="text" class="form-control" id="ArtName" placeholder="Artikelnaam" value="<?php echo $product->ArtName ?>" required>
                </div>
                <div class="form-group col-sm-3 col-xs-12">
                    <label for="Price">Prijs</label>
                    <input type="number" class="form-control" id="Price" placeholder="Prijs" value="<?php echo (int)$product->Price ?>" required>
                </div>
                <div class="form-group col-sm-9 col-xs-12">
                    <label for="Category">Categorie</label>
                    <input type="text" class="form-control" id="Category" placeholder="Categorie" value="<?php echo $category->Category ?>" required>
                </div>
                <div class="form-group">
                    <label for="Description">Beschrijving</label>
                    <textarea type="text" class="form-control textAreaInput" id="Description" placeholder="Beschrijving" required><?php echo $product->Description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="UploadFile">Afbeelding(en) toevoegen</label>
                    <input type="file" id="UploadFile" name="upload_file[]" onchange="preview_image();" multiple/>
                    <p class="help-block">Selecteer hier de afbeeldingen voor bij het product</p>
                </div>

                <button type="submit" class="btn btn-default" name="EditProduct">Wijzigen</button>
            </form>
            <div id="image_preview"></div>
            <!--/Add product-->
        </div>

    </div>

    <!--/End Content-->

<?php include 'Footer.php' ?>