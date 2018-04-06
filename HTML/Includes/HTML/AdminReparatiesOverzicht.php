<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center h1-margin">Admin beheer reparaties overzicht</h1>

    <div id="reparatiesOverzichtUitlijningDiv">
        <!-- Filter -->
        <form>
            <span class="bold">Filter op status: </span>
            <select name="reparatiesFilter">
                <option value="inBehandeling">In behandeling</option>
                <option value="defect">Defect</option>
                <option value="voltooid">Voltooid</option>
            </select>
            <input type="submit" value="Filter" class="btn button-color">
        </form>
        <hr style="border-color: black; width: 100%;">

        <!-- Item 1 -->
        <div id="reparatiesOverzichtRow">
            <div id="reparatiesOverzichtRowDiv">
                <p class="bold">Reparatienummer</p>
                <a href="AdminReparaties.php">03928375</a>
            </div>
            <div id="reparatiesOverzichtRowDiv">
                <p class="bold">Klantnaam</p>
                <p>Jan ter Aardt</p>
            </div>
            <div id="reparatiesOverzichtRowDiv" style="width: 120px;">
                <a href="AdminReparaties.php" class="btn button-color" style="margin-top: 20px;"><span class="glyphicon glyphicon-trash"></span> Verwijderen</a>
            </div>
        </div>
        <hr style="border-color: black; width: 100%;">
    </div>
</div>
<?php include 'Footer.php'; ?>