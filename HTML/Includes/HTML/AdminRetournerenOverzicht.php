<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center h1-margin">Admin beheer retourneren overzicht</h1>

    <div id="retournerenOverzichtUitlijningDiv">
        <!-- Filter -->
        <form>
            <span class="bold">Filter op status: </span>
            <select name="retournerenFilter">
                <option value="inBehandeling">Aangemeld</option>
                <option value="defect">Ontvangen</option>
                <option value="voltooid">Voltooid</option>
            </select>
            <input type="submit" value="Filter" class="btn button-color">
        </form>
        <hr style="border-color: black; width: 100%;">

        <!-- Item 1 -->
        <div id="retournerenOverzichtRow">
            <div id="retournerenOverzichtRowDiv">
                <p class="bold">Retournummer</p>
                <a href="AdminRetourneren.php">3489234</a>
            </div>
            <div id="retournerenOverzichtRowDiv">
                <p class="bold">Klantnaam</p>
                <p>Jan ter Aardt</p>
            </div>
            <div id="retournerenOverzichtRowDiv" style="width: 120px;">
                <a href="AdminReparaties.php" class="btn button-color" style="margin-top: 20px;"><span class="glyphicon glyphicon-trash"></span> Verwijderen</a>
            </div>
        </div>
        <hr style="border-color: black; width: 100%;">
    </div>
</div>
<?php include 'Footer.php'; ?>