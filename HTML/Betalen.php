<?php include 'Header.php'; ?>
<div id="content">
    <?php 
        $CustomerID = $_COOKIE['login_user'];
        $sql = "SELECT * FROM customers WHERE `CustomerID` = '$CustomerID'";
        $query = $database->query($sql);
        $result = $database->fetch_array($query);
    ?>
    <h1 class="text-center h1-margin">Betalen</h1>

    <div id="betalenUitlijningDiv">
        <form action="AddOrder.php">
            <div id="betalenDiv">
                <h3>Klantgegevens</h3>
                <p class="bold betalen-p-left">Voornaam:</p><p class="betalen-p-right"><?php echo $result['Initials']; ?></p>
                <p class="bold betalen-p-left">Tussenvoegsel:</p><p class="betalen-p-right"><?php echo $result['Prefix']; ?></p>
                <p class="bold betalen-p-left">Achternaam:</p><p class="betalen-p-right"><?php echo $result['Lastname']; ?></p>
                <p class="bold betalen-p-left">Straat:</p><p class="betalen-p-right"><?php echo $result['Street']; ?></p>
                <p class="bold betalen-p-left">Huisnummer:</p><p class="betalen-p-right"><?php echo $result['HouseNumber'].$result['Addition']; ?></p>
                <p class="bold betalen-p-left">Postcode:</p><p class="betalen-p-right"><?php echo $result['Zipcode']; ?></p>
                <p class="bold betalen-p-left">Plaats:</p><p class="betalen-p-right"><?php echo $result['City']; ?></p>                 
            </div>
            <hr style="border-color: black; border-width: 2px; width: 100%;">
            <div id="betalenDiv">
                <h3>Betaalmethodes</h3>
                <input type="radio" id="paymentOption" name="IDeal" value="IDeal"><img src="images/IDEAL.gif" style="width: 75px; height: 50px;"> IDEAL 
            </div>
            <hr style="border-color: black; border-width: 2px; width: 100%;">
            <div id="paymentMethods" name="paymentMethods" class="paymentMethods">
                <h3>Banken</h3>
                <input type="radio" name="bank" value="Rabobank"><img src="images/rabobank.jpg" style="width: 75px; height: 50px;" checked> Rabobank <br>
                <input type="radio" name="bank" value="ING"><img src="images/ING.png" style="width: 75px; height: 50px;"> ING <br>
                <input type="radio" name="bank" value="ABN"><img src="images/ABN.png" style="width: 75px; height: 50px;"> ABN Ambro
            </div>
            <hr style="border-color: black; border-width: 2px; width: 100%;">
            <div id="betalenDiv">
                <input type="submit" value="Bestelling afronden" class="btn button-color">
            </div>
        </form>
    </div>
</div>
<?php include 'Footer.php'; ?>