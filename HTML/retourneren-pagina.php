<?php include 'header.php';

$returnProduct;

if(isset($_GET['id'])){
    if (isset($_SESSION['returnOrder'])) {
        $products = $_SESSION['returnOrder'];
        foreach ($products as $product) {
            $product = unserialize($product);
            if($product['ProductID'] == $_GET['id']){
                $returnProduct = $product;
            }
        }
    }
}

?>

    <div id="Contact" class="row">
        <div class="col-xs-12">

            <h3>Retourneren</h3>

            <p class="text-center">Heb je meteen onze hulp nodig? Neem dan contact op via het telefoonnummer onderaan deze pagina.</p>

            <!--Contact Form-->
            <form class="center-block myForm needs-validation">

                <div class="form-group required col-lg-4 col-sm-6 col-xs-12">
                    <label for="OrderID" class="control-label">Order nummer</label>
                    <input type="number" class="form-control" id="OrderID" placeholder="Ordernummer"
                           value="<?=$returnProduct['OrderID']?>" required>
                </div>

                <div class="form-group required col-lg-4 col-sm-6 col-xs-12">
                    <label for="ArtNr">Artikelnummer</label>
                    <input type="number" class="form-control" id="ArtNr" name="ArtNr"
                           value="<?=$returnProduct['ArtNumber']?>" placeholder="Artikelnummer" required>
                </div>

                <div class="form-group col-lg-4 col-sm-6 col-xs-12 required">
                    <label for="Amount">Aantal</label><br>
                    <select name="Amount" id="Amount" class="form-control" required>
                        <option value="" disabled selected>Selecteer aantal</option>
                        <?php
                        for($i = 1; $i <= $returnProduct["Amount"]; $i++){
                            echo '<option value="' . $i . '" required>' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group col-lg-4 col-sm-6 col-xs-12 required">
                    <label for="Reason" class="control-label">Reden</label>
                    <select name="Reason" id="Reason" class="form-control" required>
                        <option value="" disabled selected>Selecteer een reden</option>
                        <option value="1" disabled selected>Verkeerd product geleverd</option>
                        <option value="2" disabled selected>Niet gewenst</option>
                        <option value="3" disabled selected>Voldoet niet aan de verwachtingen</option>
                        <option value="4" disabled selected>Niet zoals beschreven online</option>
                        <option value="5" disabled selected>Verkeerde maat</option>
                    </select>
                </div>

                <div class="form-group col-lg-12 required">
                    <label for="Message" class="control-label">Bericht</label>
                    <textarea type="text" class="form-control" id="Message" placeholder="Bericht..."></textarea>
                </div>

                <button type="submit" class="btn btn-default">Verstuur</button>
            </form>

            <!--/Col-xs-12-->
        </div>
        <!--/Contact-->
    </div>

<?php include 'Footer.php';?>