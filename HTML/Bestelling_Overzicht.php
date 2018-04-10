<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-centerx h1-margin">Overzicht</h1>
    <h3>Overzicht artikelen</h3>

    <?php 
        if (isset($_COOKIE['Order'])) {
            $cookieData = unserialize($_COOKIE['Order']);
            $sumTotal = 0;
            $sumTotalBTW = 0;

            for ($i = 0; $i < count($cookieData); $i++) {
                $details = $cookieData[$i];
                $sql = "SELECT * FROM products WHERE ProductID = $details->ProductID";
                $artikel = $database->query($sql);
                $result = $artikel->fetch_assoc();

                $totalSum = $details->Amount * $result['Price'];
                $btwPrice = ($totalSum / 100) * 21;

                $sumTotal += $totalSum;
                ?>
                
                <div id="winkelwagenOverzichtDivContainer" style="margin-left: 20px;">
                    <div id="winkelwagenOverzichtDiv">
                        <p class="bold">Artikelnummer</p>
                        <p><?php echo $result['ArtNumber'] ?></p>
                    </div>
                    <div id="winkelwagenOverzichtDiv">
                        <p class="bold">Artikelnaam</p>
                        <p><?php echo $result['ArtName']; ?></p>
                    </div>
                </div>
                <div id="winkelwagenOverzichtDiv" style="width: 60px;">
                    <p class="bold">Aantal</p>
                    <p><?php echo $details->Amount; ?></p>
                </div>
                <div id="winkelwagenOverzichtDivContainer">
                    <div id="winkelwagenOverzichtDiv">
                        <p class="bold">Prijs</p>
                        <p><?php echo '€ '.$result['Price']; ?></p>
                    </div>
                    <div id="winkelwagenOverzichtDiv">
                        <p class="bold">Totaalprijs</p>
                        <p><?php echo '€ '.number_format($totalSum, 2); ?></p>
                    </div>
                </div>
                <div id="winkelwagenOverzichtDiv">
                    <p class="bold">BTW prijs</p>
                    <p><?php echo '€ '.number_format(round($btwPrice, 2), 2); ?></p>
                </div>
                <hr style="border-color: black; width: 100%;">

                <?php
            }

            $sumTotalBTW = ($sumTotal / 100) * 21;
            $sumTotal += 3.50;
        }
    ?>

    <!-- Totaal overzicht -->
    <div id="totaalOverzicht">
        <form action="Betalen.php">
            <p class="bold winkelwagenOverzicht-p-left">Totaalprijs inc. verzendkosten</p><p class="winkelwagenOverzicht-p-right"><?php echo "€ ".number_format($sumTotal, 2); ?></p>
            <p class="bold winkelwagenOverzicht-p-left">Btw prijs</p><p class="winkelwagenOverzicht-p-right"><?php echo "€ ".number_format(round($sumTotalBTW, 2), 2); ?></p>
            <input type="submit" value="Betalen" class="btn button-color">
        </form>
    </div>
</div>
<?php include 'Footer.php'; ?>