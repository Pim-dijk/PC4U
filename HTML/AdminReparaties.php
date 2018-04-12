<?php include 'Header.php'; ?>
<div id="content">
    <div id="reparatiesUitlijningDiv">
        <h1 class="text-center">Admin beheer reparaties</h1>
        <?php 
            if (isset($_GET['reparatieID'])) {
                $reparatieID = $_GET['reparatieID'];
                $sql = "SELECT * FROM reparaties INNER JOIN customers ON reparaties.CustomerID = customers.CustomerID WHERE reparaties.id = '$reparatieID'";
                $query = $database->query($sql);
                $result = $database->fetch_array($query);
        ?>
            <table class="table-responsive">
                <tbody>
                    <tr>
                        <td>Reparatienummer:</td>
                        <td><?php echo $result['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Voornaam:</td>
                        <td><?php echo $result['Initials']; ?></td>
                    </tr>
                    <tr>
                        <td>Tussenvoegsel:</td>
                        <td><?php echo $result['Prefix']; ?></td>
                    </tr>
                    <tr>
                        <td>Achternaam:</td>
                        <td><?php echo $result['Lastname']; ?></td>
                    </tr>
                    <tr>
                        <td>Straat:</td>
                        <td><?php echo $result['Street']; ?></td>
                    </tr>
                    <tr>
                        <td>Huisnummer:</td>
                        <td><?php echo $result['HouseNumber'].$result['Addition']; ?></td>
                    </tr>
                    <tr>
                        <td>Postcode:</td>
                        <td><?php echo $result['Zipcode']; ?></td>
                    </tr>
                    <tr>
                        <td>E-mailadres:</td>
                        <td><?php echo $result['Email']; ?></td>
                    </tr>
                    <tr>
                        <td>Telefoonnummer:</td>
                        <td><?php echo $result['PhoneNumber']; ?></td>
                    </tr>
                    <tr>
                        <td>Probleem:</td>
                        <td><?php echo $result['Description']; ?></td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td><?php echo $result['Status']; ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
            }
        ?>
        <hr>

        <a href="AdminReparatiesOverzicht.php" class="btn button-color" style="float: left;">Terug</a>

        <a href="update_reparatie_status.php?reparatieID=<?php echo $result['id']; ?>&status=3" class="btn button-color">Defect</a>
        <a href="update_reparatie_status.php?reparatieID=<?php echo $result['id']; ?>&status=2" class="btn button-color">Voltooid</a>
        <a href="update_reparatie_status.php?reparatieID=<?php echo $result['id']; ?>&status=1" class="btn button-color">In behandeling</a>
    </div>
</div>
<script src="js/filter_reparaties.js"></script>
<?php include 'Footer.php'; ?>