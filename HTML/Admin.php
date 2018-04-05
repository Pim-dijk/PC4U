<?php include 'Header.php' ?>

    <!--Content-->

    <div id="Admin" class="content">
        <h1>Admin Panel</h1>
        <hr>

        <div id="AddDiscount" class="row">
            <h3>Aanbieding aanmaken</h3>

            <!--Aanbieding Form-->
            <form class="center-block myForm needs-validation" method="post" action="CreateDiscount.php">
                <div class="form-group col-sm-4 col-xs-12 search-box">
                    <label for="ArtNr">Artikelnaam</label>
                    <input type="text" class="form-control" id="ArtNr" placeholder="ArtNr/ArtName" required>
                    <div class="result"></div>
                </div>
                <div class="form-group col-sm-4 col-xs-12">
                    <label for="Discount">Nieuwe prijs</label>
                    <input type="number" class="form-control" id="Discount" placeholder="Nieuwe prijs" required>
                </div>
                <div class="form-group col-sm-4 col-xs-12">
                    <label for="Expire">Vervaldatum</label>
                    <input type="date" class="form-control" id="Expire" placeholder="Vervaldatum" required>
                </div>

                <button type="submit" name="discount" class="btn btn-default">Aanmaken</button>
            </form>
            <!--/Aanbieding aanmaken-->
        </div>

        <hr>

        <div id="AddProduct" class="row">
            <h3>Product toevoegen</h3>

            <form class="center-block myForm needs-validation">
                <div class="form-group col-sm-4 col-xs-12">
                    <label for="ArtNr">Artikelnummer</label>
                    <input type="text" class="form-control" id="ArtNr" placeholder="ArtikelNummer" required>
                </div>
                <div class="form-group col-sm-8 col-xs-12">
                    <label for="ArtName">Artikelnaam</label>
                    <input type="text" class="form-control" id="ArtName" placeholder="Artikelnaam" required>
                </div>
                <div class="form-group col-sm-3 col-xs-12">
                    <label for="Price">Prijs</label>
                    <input type="number" class="form-control" id="Price" placeholder="Prijs" required>
                </div>
                <div class="form-group col-sm-9 col-xs-12">
                    <label for="Category">Categorie</label>
                    <input type="text" class="form-control" id="Category" placeholder="Categorie" required>
                </div>
                <div class="form-group">
                    <label for="Description">Beschrijving</label>
                    <textarea type="text" class="form-control textAreaInput" id="Description" placeholder="Beschrijving" required></textarea>
                </div>
                <div class="form-group">
                    <label for="ImageInput">Afbeelding(en) toevoegen</label>
                    <input type="file" id="ImageInput">
                    <p class="help-block">Selecteer hier de afbeeldingen voor bij het product</p>
                </div>

                <button type="submit" class="btn btn-default">Toevoegen</button>
            </form>
            <!--/Add product-->
        </div>

        <div id="AdminServices" class="row">

            <h2>Services</h2>
            <hr>

            <div>
                <h3 class="Services"><a href="#">Reparatie</a></h3>
                <h3 class="Services"><a href="#">Retouren</a></h3>
                <h3 class="Services"><a href="#">RMA</a></h3>
            </div>
            <!--/Admin Services-->
        </div>

        <div id="AdminRegisterAdmin" class="row">
            <h2 class="text-center">Register new admin</h2>
            <hr>
            <div>
                <form class="center-block myForm needs-validation">
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="Email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="Password">Wachtwoord</label>
                        <input type="password" class="form-control" id="Password" placeholder="Wachtwoord" required>
                    </div>

                    <button type="submit" name="RegisterAdmin" class="btn btn-default">Toevoegen</button>
                </form>
            </div>
        </div>

    </div>

    <!--/End Content-->

<?php include 'Footer.php' ?>