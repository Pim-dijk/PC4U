<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center margin-bottom">Winkelwagen</h1>
    <form action="updateShoppingcart.php" method="POST" name="shoppingcart" enctype="multipart/form-data">
        <?php 
            if (isset($_COOKIE['Shoppingcart'])) {
                $shoppingcartData = unserialize($_COOKIE['Shoppingcart']);
                $totalSum = 0;
                $totalProducts = 0;
                for ($i = 0; $i < count($shoppingcartData); $i++) {
                    $object = $shoppingcartData[$i];
                    $sql = "SELECT * FROM products INNER JOIN images ON products.ProductID = images.ProductID WHERE products.ProductID = $object->ProductID";
                    $product = $database->query($sql);
                    $result = $database->fetch_array($product);
                    $productTotalSum = $object->Amount * $result['Price'];
                    $totalSum += $productTotalSum;
                    $totalProducts += 1;

                    ?>
                        <div id="winkelwagenDivContainer">
                            <input type="hidden" name="productID-<?php echo $i; ?>" value="<?php echo $object->ProductID; ?>">
                            <div id="winkelwagenDiv">
                                <img src="<?php echo $result["Location"] ?>">
                            </div>
                            <div id="winkelwagenDiv" style="margin-left: 10px;">
                                <p class="bold">Artikelnaam</p>
                                <label class="margin-top-20"><?php echo $result['ArtName'] ?></label>
                            </div>
                        </div>
                        <div id="winkelwagenDivContainer" style="width: 175px;">
                            <div id="winkelwagenDiv" style="width: 75px;">
                                <p class="bold">Aantal</p>
                                <input type="text" name="aantal-<?php echo $object->ProductID; ?>" id="aantal-<?php echo $object->ProductID; ?>" value="<?php echo $object->Amount; ?>" onchange="updatePrice(this.name)">
                            </div>
                            <div id="winkelwagenDiv" style="width: 100px;">
                                <a href="deleteItemShoppingcart.php?productID=<?php echo $object->ProductID; ?>" class="line-height-125-winkelwagen"><span class="glyphicon glyphicon-trash"> Verwijderen</a>
                            </div>
                        </div>
                        <div id="winkelwagenDivContainer" style="margin-left: 20px;">
                            <div id="winkelwagenDiv">
                                <p class="bold">Prijs</p>
                                <label class="margin-top-20" id="productPrice-<?php echo $object->ProductID; ?>"><?php echo "€  ".$result['Price']; ?></label>
                            </div>
                            <div id="winkelwagenDiv">
                                <p class="bold">Totaal prijs</p>
                                <input type="hidden" name="hiddenTotalPriceProduct" id="hiddenTotalPriceProduct-<?php echo $object->ProductID; ?>" value="<?php echo "€ ".number_format($productTotalSum, 2); ?>" disabled>
                                <label class="margin-top-20" name="totalPriceProduct" id="totalPriceProduct-<?php echo $object->ProductID; ?>"><?php echo "€ ".number_format($productTotalSum, 2); ?></label>
                            </div>
                        </div>
                        <hr style="width: 100%; border-color: black;">
                    <?php
                }
                ?>
                    <!-- Winkelwagen totaal -->
                    <div id="winkelwagenTotaal">
                        <p class="bold winkelwagen-p-left">Totaalprijs:</p><p class="winkelwagen-p-right" id="totalSum">€ <?php echo number_format($totalSum, 2); ?></p>
                        <p class="bold winkelwagen-p-left">Verzendkosten:</p><p class="winkelwagen-p-right">€ 3,50</p>
                        <input type="submit" value="Bestellen" class="btn button-color">
                        <input type="hidden" name="totalProducts" value="<?php echo $totalProducts; ?>"
                    </div>
                </form>
                <?php
            } else {
                echo "<h2>De winkelwagen is leeg!</h2>";
            }
        ?>
</div>
<script src="js/update_price.js"></script>
<?php include 'Footer.php'; ?>