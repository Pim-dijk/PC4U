<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center h1-margin">Admin beheer retourneren overzicht</h1>

    <div id="retournerenOverzichtUitlijningDiv">
        <!-- Filter -->
        <form>
            <span class="bold">Filter op status: </span>
            <select name="retournerenFilter" onchange="filter_retour(this.value)">
                <option value="Alles">Alles</option>
                <option value="Aangemeld">Aangemeld</option>
                <option value="Ontvangen">Ontvangen</option>
                <option value="Voltooid">Voltooid</option>
            </select>
        </form>
        <hr>

        <?php
            $counter = 0;
            $sql = "SELECT * FROM retourneren";
            $retour = $database->query($sql);
            while ($row = $retour->fetch_assoc()) {
                $retourNummer = $row['id'];

        ?>
        <div id="row">
            <div id="retournerenDiv-<?php echo $counter; ?>">
                <div id="retournerenOverzichtRowDiv">
                    <p class="bold">Retournummer</p>
                    <a href="AdminRetourneren.php?retourNummer=<?php echo $retourNummer; ?>"><?php echo $retourNummer; ?></a>
                </div>
                <div id="retournerenOverzichtRowDiv">
                    <p class="bold">Klantnummer</p>
                    <p><?php echo $row['CustomerID']; ?></p>
                </div>
                <div id="retournerenOverzichtRowDiv">
                    <p class="bold">Ordernummer</p>
                    <p><?php echo $row['OrderID']; ?></p>
                </div>
                <div id="retournerenOverzichtRowDiv" style="width: 155px;">
                    <a href="delete_retour.php?retourNummer=<?php echo $retourNummer; ?>" style="line-height: 75px;" style="margin-top: 20px;"><span class="glyphicon glyphicon-trash"></span> Verwijderen</a>
                </div>
                <div id="retournerenOverzichtRowDiv">
                    <p class="bold">Status</p>
                    <p id="status-<?php echo $counter; ?>"><?php echo $row['Status']; ?></p>
                </div>
                <hr>
            </div>
        </div>
        <?php
                $counter++;
            }
        ?>
        <input type="hidden" id="numberOfRows" value="<?php echo $counter; ?>">
    </div>
</div>
<script src="js/filter_retour.js"></script>
<?php include 'Footer.php'; ?>