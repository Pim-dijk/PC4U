<?php include 'Header.php'; ?>
<div id="content">
    <div id="retournerenUitlijningDiv">
        <h1 class="text-center h1-margin">Admin beheer retourneren</h1>
        <?php 
            if (isset($_GET['retourNummer'])) {
                $retourNummer = $_GET['retourNummer'];

                $sql = "SELECT * FROM retourneren INNER JOIN customers ON retourneren.CustomerID = customers.CustomerID WHERE retourneren.id='$retourNummer'";
                $query = $database->query($sql);
                $result = $database->fetch_array($query);
            }
            ?>

        <table id="table" class="table-responsive">
            <tbody>
                <tr>
                    <td>Klantnummer:</td><td><?php echo $result['CustomerID']; ?></td>
                </tr>
                <tr>
                    <td>Voornaam:</td><td><?php echo $result['Initials']; ?></td>
                </tr>
                <tr>
                    <td>Tussenvoegsel:</td><td><?php echo $result['Prefix']; ?></td>
                </tr>
                <tr>
                    <td>Achternaam:</td><td><?php echo $result['Lastname']; ?></td>
                </tr>
                <tr>
                    <td>Straat:</td><td><?php echo $result['Street']; ?></td>
                </tr>
                <tr>
                    <td>Huisnummer:</td><td><?php echo $result['HouseNumber'].$result['Addition']; ?></td>
                </tr>
                <tr>
                    <td>Postcode:</td><td><?php echo $result['Zipcode']; ?></td>
                </tr>
                <tr>
                    <td>Plaats:</td><td><?php echo $result['Street']; ?></td>
                </tr>
                <tr>
                    <td>Telefoonnummer:</td><td><?php echo $result['PhoneNumber']; ?></td>
                </tr>
                <tr>
                    <td>E-mailadres:</td><td><?php echo $result['Email']; ?></td>
                </tr>
                <tr>
                    <td>Ordernummer:</td><td><?php echo $result['OrderID']; ?></td>
                </tr>
                <tr>
                    <td>Productnummer:</td><td><?php echo $result['ProductID']; ?></td>
                </tr>
                <tr>
                    <td>Reden:</td><td><?php echo $result['Reason']; ?></td>
                </tr>
                <tr>
                    <td>Toelichting:</td><td><?php echo $result['Message']; ?></td>
                </tr>
                <tr>
                    <td>Status:</td><td><?php echo $result['Status']; ?></td>
                </tr>
            </tbody>
        </table>
        <hr>
        
        <a href="AdminRetournerenOverzicht.php" class="btn button-color" style="float: left;">Terug</a>

        <a href="update_retour_status.php?status=3&retourNummer=<?php echo $retourNummer; ?>" class="btn button-color">Voltooid</a>
        <a href="update_retour_status.php?status=2&retourNummer=<?php echo $retourNummer; ?>" class="btn button-color">Ontvangen</a>
        <a href="update_retour_status.php?status=1&retourNummer=<?php echo $retourNummer; ?>" class="btn button-color">Aangemeld</a>
    </div>
</div>
<?php include 'Footer.php'; ?>