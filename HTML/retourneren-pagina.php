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
            <form class="center-block myForm needs-validation" method="POST" action="createReturn.php" >

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
                        if(isset($_SESSION['returnOrder']) && isset($_GET['id'])){
                            for($i = 1; $i <= $returnProduct["Amount"]; $i++){
                                echo '<option value="' . $i . '" required>' . $i . '</option>';
                            }
                        }
                        else{
                            for($i = 1; $i <= 10; $i++){
                                echo '<option value="' . $i . '" required>' . $i . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group col-lg-5 col-sm-6 col-xs-12 required">
                    <label for="Reason" class="control-label">Reden</label>
                    <select name="Reason" id="Reason" class="form-control" required>
                        <option value="" disabled selected>Selecteer een reden</option>
                        <option value="wrongProduct">Verkeerde product geleverd</option>
                        <option value="notNeeded">Niet meer nodig</option>
                        <option value="notAsExpected">Voldoet niet aan de verwachtingen</option>
                        <option value="notAsDescribed">Niet zoals beschreven</option>
                        <option value="wrongSize">Verkeerde maat</option>
                    </select>
                </div>

                <div id="hiddenTextArea" class="form-group col-lg-12 hidden">
                    <label for="Message" class="control-label">Toelichting</label>
                    <textarea type="text" class="form-control textAreaInput" id="Message" placeholder="Toelichting..."></textarea>
                </div>

                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-default pull-left">Verstuur</button>
                </div>
            </form>

            <!--/Col-xs-12-->
        </div>
        <!--/Contact-->
    </div>

<?php include 'Footer.php';?>