<?php include 'Header.php'; ?>
<?php if (!isset($_COOKIE['login_user'])) header("Location: index.php"); ?>
<div id="content">
    <h1 class="text-center">Admin beheer RMA</h1>

    

    <div id="RMAUitlijningDiv">
        <table id="table" class="table-responsive">
            <tbody>
                <?php
                    if (isset($_GET['RmaID'])) {
                        $rmaID = $_GET['RmaID'];
                        $sql = "SELECT * FROM rma INNER JOIN customers ON rma.CustomerID = customers.CustomerID WHERE rma.id = '$rmaID'";
                        $query = $database->query($sql);
                        $result = $database->fetch_array($query);
                    }
                ?>
                <tr>
                    <td>Ordernummer:</td><td><?php echo $result['OrderID']; ?></td>
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
                    <td>Plaats:</td><td><?php echo $result['HouseNumber'].$result['Addition']; ?></td>
                </tr>
                <tr>
                    <td>E-mailadres:</td><td><?php echo $result['Email']; ?></td>
                </tr>
                <tr>
                    <td>Telefoonnummer:</td><td><?php echo $result['PhoneNumber']; ?></td>
                </tr>
                <tr>
                    <td>ProductID:</td><td><?php echo $result['ProductID']; ?></td>
                </tr>
                <tr>
                    <td>Status:</td><td><?php echo $result['Status']; ?></td>
                </tr>
                <tr>
                    <td>Oorzaak:</td><td><?php echo $result['Oorzaak']; ?></td>
                </tr>
            </tbody>
        </table>

        <hr>

        <a href="AdminRMAOverzicht.php" class="btn button-color" style="float: left;">Terug</a>
        
        <a href="update_rma_status.php?status=3&RmaID=<?php echo $rmaID; ?>" class="btn button-color">Voltooid</a>
        <a href="update_rma_status.php?status=2&RmaID=<?php echo $rmaID; ?>" class="btn button-color">Ontvangen</a>
        <a href="update_rma_status.php?status=1&RmaID=<?php echo $rmaID; ?>" class="btn button-color">In behandeling</a>
    </div>
</div>
<?php include 'Footer.php'; ?>