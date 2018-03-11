<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center h1-margin">Admin beheer RMA overzicht</h1>

    <div id="RMAOverzichtUitlijningDiv">
        <!-- Filter -->
        <form>
            <span class="bold">Filter op status: </span>
            <select name="rmaFilter">
                <option value="inBehandeling">In behandeling</option>
                <option value="ontvangen">Ontvangen</option>
                <option value="voltooid">Voltooid</option>
            </select>
            <input type="submit" value="Filter" class="btn button-color">
        </form>
        <hr style="border-color: black; width: 100%;">

        <!-- Item 1 -->
        <div id="RMAOverzichtRow">
            <div id="RMAOverzichtRowDiv">
                <p class="bold">Retournummer</p>
                <a href="AdminRMA.php">3489234</a>
            </div>
            <div id="RMAOverzichtRowDiv">
                <p class="bold">Klantnummer</p>
                <p>3842305</p>
            </div>
            <div id="RMAOverzichtRowDiv" style="width: 120px;">
                <a href="#" class="btn button-color" style="margin-top: 20px;"><span class="glyphicon glyphicon-trash"></span> Verwijderen</a>
            </div>
        </div>
        <hr style="border-color: black; width: 100%;">
    </div>
</div>
<?php include 'Footer.php'; ?>