<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center h1-margin">Admin beheer reparaties overzicht</h1>

    <div id="reparatiesOverzichtUitlijningDiv">
        <!-- Filter -->
        <form>
            <span class="bold">Filter op status: </span>
            <select name="reparatiesFilter" onchange="filterReparaties(this.value)">
                <option value="Alles">Alles</option>
                <option value="In behandeling">In behandeling</option>
                <option value="Defect">Defect</option>
                <option value="Voltooid">Voltooid</option>
            </select>
        </form>
        <hr>


        <?php
            $counter = 0;
            $numbering = 0;
            $sql = "SELECT * FROM reparaties";
            $reparaties = $database->query($sql);
            while ($row = $reparaties->fetch_assoc()) {
                $customerID = $row['CustomerID'];
                $sql = "SELECT * FROM customers WHERE CustomerID = '$customerID'";
                $query = $database->query($sql);
                $result = $database->fetch_array($query);
                $customerName = $result['Initials']." ".$result['Prefix']." ".$result['Lastname'];
                ?>
        <div class="row">
            <div id="reparatieRowDiv-<?php echo $numbering; ?>">
                    <div class="reparatieDiv">
                        <p class="bold">Reparatie ID</p>
                        <a href="AdminReparaties.php?reparatieID=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a>
                    </div>
                    <div class="reparatieDiv">
                        <p class="bold">Klantnaam</p>
                        <p><?php echo $customerName; ?></p>
                    </div>
                <div class="reparatieDiv" style="width: 185px;">
                    <p class="bold">Verwijderen</p>
                    <a href="delete_reparatie.php?reparatieID=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-trash"> Verwijderen</a>
                </div>
                <div class="reparatieDiv">
                    <p class="bold">Status</p>
                    <p id="status-<?php echo $numbering; ?>" ><?php echo $row['Status']; ?></p>
                </div>
                <hr>
            </div>
        </div>
        <?php
                $numbering++;
                $counter++;
            }
        ?>
        <input type="hidden" id="totalRows" name="totalRows" value="<?php echo $counter; ?>">
    </div>
</div>
<script src="js/filter_reparaties.js"></script>
<?php include 'Footer.php'; ?>