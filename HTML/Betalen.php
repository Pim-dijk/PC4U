<?php include 'Header.php'; ?>
<div id="content">
    <?php 
        $CustomerID = $_COOKIE['login_user'];
        $sql = "SELECT * FROM customers WHERE `CustomerID` = '$CustomerID'";
        $query = $database->query($sql);
        $result = $database->fetch_array($query);
    ?>
    <h1 class="text-center">Betalen</h1>

    <div id="betalenUitlijningDiv">
        <form action="AddOrder.php">
            <div id="betalenDiv">
                <h3>Klantgegevens</h3>

                <table class="table-responsive">
                    <tbody>
                        <tr>
                            <td class="betalen-td-padding">Voornaam:</td><td><?php echo $result['Initials']; ?></td>
                        </tr>
                        <tr>
                            <td class="betalen-td-padding">Tussenvoegsel:</td><td><?php echo $result['Prefix']; ?></td>
                        </tr>
                        <tr>
                            <td class="betalen-td-padding">Achternaam:</td><td><?php echo $result['Lastname']; ?></td>
                        </tr>
                        <tr>
                            <td class="betalen-td-padding">Straat:</td><td><?php echo $result['Street']; ?></td>
                        </tr>
                        <tr>
                            <td class="betalen-td-padding">Huisnummer:</td><td><?php echo $result['HouseNumber'].$result['Addition']; ?></td>
                        </tr>
                        <tr>
                            <td class="betalen-td-padding">Postcode:</td><td><?php echo $result['Zipcode']; ?></td>
                        </tr>
                        <tr>
                            <td class="betalen-td-padding">Plaats:</td><td><?php echo $result['City']; ?></td>
                        </tr>
                    </tbody>
                </table>            
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