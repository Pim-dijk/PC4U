<?php
include 'Header.php';

    // Get a list of categories
    $categories = $database->query("SELECT * FROM categories");
?>
    <!--Content-->

    <div id="Admin" class="content">
        <h1>Admin Panel</h1>
        <hr>

        <div id="AddDiscount" class="row">
            <h3>Aanbieding aanmaken</h3>

            <!--Aanbieding Form-->
            <form class="center-block myForm needs-validation" method="post" action="CreateDiscount.php">
                <div class="form-group col-sm-6 col-xs-12 search-box-catName">
                    <label for="CategoryDiscount">Categorie</label>
                    <select class="form-control" id="CategoryDiscount" name="Category" required>
                        <option value="" disabled selected>Selecteer Categorie</option>
                    <?php while ($row = $categories->fetch_assoc()) {
                        echo '<option value="' . $row['CategoryID'] . '">' . $row['Category'] . '</option>';
                    }
                    ?>
                    </select>
                </div>
                <div id="ArtNameHidden" class="form-group col-sm-6 col-xs-12 search-box-artName hidden">
                    <label for="ArtNameDiscount">Artikelnaam</label>
                    <input type="text" class="form-control" id="ArtNameDiscount" name="ArtName" placeholder="ArtName" autocomplete="off" required>
                    <div class="result-name"></div>
                </div>
                <div id="DiscountHidden" class="form-group col-sm-6 col-xs-12 hidden">
                    <label for="Discount">Nieuwe prijs</label>
                    <input type="number" min="0" step=".01" class="form-control" id="Discount" name="NewPrice" placeholder="Nieuwe prijs" required>
                </div>
                <div id="ExpireHidden" class="form-group col-sm-6 col-xs-12 hidden">
                    <label for="Expire">Vervaldatum</label>
                    <input type="date" class="form-control" id="Expire" name="ExpirationDate" placeholder="Vervaldatum" required>
                </div>

                <button type="submit" id="discountSubmit" name="discount" class="btn btn-default hidden">Aanmaken</button>
            </form>
            <!--/Aanbieding aanmaken-->
        </div>

        <hr>

        <div id="AddProduct" class="row">
            <h3>Product toevoegen</h3>

            <form class="center-block myForm needs-validation" name="AddProduct" action="AddProduct.php" method="POST" enctype="multipart/form-data">
                <div class="form-group col-sm-4 col-xs-12">
                    <label for="ArtNr">Artikelnummer</label>
                    <input type="text" class="form-control" id="ArtNr" name="Artnr" placeholder="ArtikelNummer" required>
                </div>
                <div class="form-group col-sm-8 col-xs-12">
                    <label for="ArtName">Artikelnaam</label>
                    <input type="text" class="form-control" id="ArtName" name="Artname" placeholder="Artikelnaam" required>
                </div>
                <div class="form-group col-sm-3 col-xs-12">
                    <label for="Price">Prijs</label>
                    <input type="number" class="form-control" id="Price" name="Price" placeholder="Prijs" required>
                </div>

                <div class="form-group col-sm-9 col-xs-9">
                    <label for="Category">Categorie</label><br>
                    <select onchange="val()"  name="Category" id="Category" class="form-control" required>
                        <option value="" disabled selected>Selecteer Categorie</option>
                        <?php
                        mysqli_data_seek($categories, 0);
                        while ($row = $categories->fetch_assoc()) {
                            echo '<option value="' . $row['CategoryID'] . '">' . $row['Category'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Description">Beschrijving</label>
                    <textarea type="text" class="form-control textAreaInput" id="Description" name="Description" placeholder="Beschrijving" required></textarea>
                </div>
                <div class="form-group">
                    <label for="ImageInput">Afbeelding(en) toevoegen</label>
                    <input type="file" id="upload_file" name="upload_file[]" multiple>
                    <p class="help-block">Selecteer hier de afbeeldingen voor bij het product</p>
                </div>

                <div id="1">
                    <label for="Property1Processor">Snelheid</label>
                    <input class="form-control" type="text" id="Property1Processor" name="Property1Processor" placeholder="Snelheid">

                    <label for="Property2Processor">Boxed</label>
                    <input class="form-control" type="text" id="Property2Processor" name="Property2Processor" placeholder="Boxed">
                </div>

                <div id="2">
                    <label for="Property1Harddisk">Capaciteit</label>
                    <input class="form-control" type="text" id="Property1Harddisk" name="Property1Harddisk" placeholder="Capaciteit">

                    <label for="Property2Harddisk">Snelheid</label>
                    <input class="form-control" type="text" id="Property2Harddisk" name="Property2Harddisk" placeholder="Snelheid">
                </div>

                <div id="3">
                    <label for="Property1Housing">Formfactor</label>
                    <input class="form-control" type="text" id="Property1Housing" name="Property1Housing" placeholder="Merk">

                    <label for="Property2Housing">Met voeding</label>
                    <input class="form-control" type="text" id="Property2Housing" name="Property2Housing" placeholder="Type">
                </div>

                <div id="4">
                    <label for="Property1Laptop">CPU</label>
                    <input class="form-control" type="text" id="Property1Laptop" name="Property1Laptop" placeholder="Merk">

                    <label for="Property2Laptop">Size</label>
                    <input class="form-control" type="text" id="Property2Laptop" name="Property2Laptop" placeholder="Processor serie">
                </div>

                <button type="submit" class="btn btn-default">Toevoegen</button>
            </form>
            <!--/Add product-->
        </div>

        <div id="AdminServices" class="row">

            <h2>Services</h2>
            <hr>

            <div>
                <h3 class="col-sm-offset-3 col-sm-2"><a href="#">Reparatie</a></h3>
                <h3 class="col-sm-2"><a href="#">Retouren</a></h3>
                <h3 class="col-sm-2"><a href="#">RMA</a></h3>
            </div>
            <!--/Admin Services-->
        </div>

        <div id="AdminRegisterAdmin" class="row">
            <h2 class="text-center">Register new admin</h2>
            <hr>
            <div>
                <form class="center-block myForm needs-validation" method="post" action="newAdmin.php">
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="Password">Wachtwoord</label>
                        <input type="password" class="form-control" id="Password" name="password" placeholder="Wachtwoord" required>
                    </div>

                    <button type="submit" name="RegisterAdmin" class="btn btn-default">Toevoegen</button>
                </form>
            </div>
        </div>

    </div>

    <!--/End Content-->

<!--Script Add Product - Category Ivan-->
    <script>
        hideAll();
        displayFirst();

        function displayFirst() {
            document.getElementById('1').style.display = "block";
        }

        function hideAll() {
            document.getElementById('1').style.display = "none";
            document.getElementById('2').style.display = "none";
            document.getElementById('3').style.display = "none";
            document.getElementById('4').style.display = "none";
        }

        function val() {
            hideAll();

            d = document.getElementById("Category").value;

            document.getElementById(d).style.display = "block";
        }
    </script>

<?php include 'Footer.php' ?>