<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-centerx h1-margin">Overzicht</h1>
    <h3>Overzicht artikelen</h3>
    
    <!-- Artikel 1 -->
    <div id="winkelwagenOverzichtDivContainer">
        <div id="winkelwagenOverzichtDiv">
            <p class="bold">Artikelnummer</p>
            <p>09928374</p>
        </div>
        <div id="winkelwagenOverzichtDiv">
            <p class="bold">Artikelnaam</p>
            <p>DXRacer chair</p>
        </div>
    </div>
    <div id="winkelwagenOverzichtDiv" style="width: 60px;">
        <p class="bold">Aantal</p>
        <p>2</p>
    </div>
    <div id="winkelwagenOverzichtDivContainer">
        <div id="winkelwagenOverzichtDiv">
            <p class="bold">Prijs</p>
            <p>€ 380,00</p>
        </div>
        <div id="winkelwagenOverzichtDiv">
            <p class="bold">Totaalprijs</p>
            <p>€ 760,00</p>
        </div>
    </div>
    <div id="winkelwagenOverzichtDiv">
        <p class="bold">BTW prijs</p>
        <p>€ 159,60</p>
    </div>
    <hr style="border-color: black; width: 100%;">

    <!-- Artikel 2 -->
    <div id="winkelwagenOverzichtDivContainer">
        <div id="winkelwagenOverzichtDiv">
            <p class="bold">Artikelnummer</p>
            <p>09928675</p>
        </div>
        <div id="winkelwagenOverzichtDiv">
            <p class="bold">Artikelnaam</p>
            <p>MSI game laptop</p>
        </div>
    </div>
    <div id="winkelwagenOverzichtDiv" style="width: 60px;">
        <p class="bold">Aantal</p>
        <p>1</p>
    </div>
    <div id="winkelwagenOverzichtDivContainer">
        <div id="winkelwagenOverzichtDiv">
            <p class="bold">Prijs</p>
            <p>€ 1200,00</p>
        </div>
        <div id="winkelwagenOverzichtDiv">
            <p class="bold">Totaalprijs</p>
            <p>€ 1200,00</p>
        </div>
    </div>
    <div id="winkelwagenOverzichtDiv">
        <p class="bold">BTW prijs</p>
        <p>€ 252,00</p>
    </div>
    <hr style="border-color: black; width: 100%;">

    <!-- Totaal overzicht -->
    <div id="totaalOverzicht">
        <form action="Betalen.php">
            <p class="bold winkelwagenOverzicht-p-left">Totaalprijs inc. verzendkosten</p><p class="winkelwagenOverzicht-p-right">€ 1963,50</p>
            <p class="bold winkelwagenOverzicht-p-left">Btw prijs</p><p class="winkelwagenOverzicht-p-right">€ 311,60</p>
            <input type="submit" value="Betalen" class="btn button-color">
        </form>
    </div>
</div>
<?php include 'Footer.php'; ?>