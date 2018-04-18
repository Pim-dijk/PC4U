<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center">Admin beheer RMA overzicht</h1>

    <div id="RMAOverzichtUitlijningDiv">
        <!-- Filter -->
        <form>
            <span class="bold">Filter op status: </span>
            <select name="rmaFilter" onchange="filter_rma(this.value)">
                <option value="Alles">Alles</option>
                <option value="In behandeling">In behandeling</option>
                <option value="Ontvangen">Ontvangen</option>
                <option value="Voltooid">Voltooid</option>
            </select>
        </form>
        <hr>

        <?php 
            $numbering = 0;
            $counter = 0;
            $sql = "SELECT * FROM rma";
            $rma = $database->query($sql);

            while ($row = $rma->fetch_assoc()) {
        ?>
        <!-- Item 1 -->
        <div id="row">
            <div id="RMAoverzicht-<?php echo $numbering; ?>">
                <div id="RMAOverzichtRowDiv">
                    <p class="bold">Retournummer</p>
                    <a href="AdminRMA.php?RmaID=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a>
                </div>
                <div id="RMAOverzichtRowDiv">
                    <p class="bold">Ordernummer</p>
                    <p><?php echo $row['OrderID']; ?></p>
                </div>
                <div id="RMAOverzichtRowDiv">
                    <p class="bold">Klantnummer</p>
                    <p><?php echo $row['CustomerID']; ?></p>
                </div>
                <div id="RMAOverzichtRowDiv" style="width: 170px;">
                    <a href="delete_rma.php?RmaID=<?php echo $row['id']; ?>" class="line-height-75"><span class="glyphicon glyphicon-trash"></span> Verwijderen</a>
                </div>
                <div id="RMAOverzichtRowDiv">
                    <p class="bold">Status</p>
                    <p id="status-<?php echo $numbering; ?>"><?php echo $row['Status']; ?></p>
                </div>
                <hr>
            </div>
        </div>
        <?php
            $numbering++;
            $counter++;
            }
        ?>
        <input type="hidden" id="totalRows" value="<?php echo $counter; ?>">
    </div>
</div>
<script src="js/filter_rma.js"></script>
<?php include 'Footer.php'; ?>