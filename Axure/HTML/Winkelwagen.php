<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center margin-bottom">Winkelwagen</h1>
    <form action="Overzicht.php">
        <!-- Artikel 1 -->
        <div id="winkelwagenDivContainer">
            <div id="winkelwagenDiv">
                <img src="images/chair.jpg">
            </div>
            <div id="winkelwagenDiv" style="margin-left: 10px;">
                <p class="bold">Artikelnaam</p>
                <p class="line-height-75-winkelwagen">DXRacer chair</p>
            </div>
        </div>
        <div id="winkelwagenDivContainer" style="width: 175px;">
            <div id="winkelwagenDiv" style="width: 75px;">
                <p class="bold">Aantal</p>
                <input type="number" name="aantal" value="2">
            </div>
            <div id="winkelwagenDiv" style="width: 100px;">
                <a href="#" class="line-height-125-winkelwagen"><span class="glyphicon glyphicon-trash"> Verwijderen</a>
            </div>
        </div>
        <div id="winkelwagenDivContainer" style="margin-left: 20px;">
            <div id="winkelwagenDiv">
                <p class="bold">Prijs</p>
                <p class="line-height-75-winkelwagen">€ 380,00</p>
            </div>
            <div id="winkelwagenDiv">
                <p class="bold">Totaal prijs</p>
                <p class="line-height-75-winkelwagen">€ 760,00</p>
            </div>
        </div>
        <hr style="width: 100%; border-color: black;">
        <!-- Artikel 2 -->
        <div id="winkelwagenDivContainer">
            <div id="winkelwagenDiv">
                <img src="images/laptop.jpg">
            </div>
            <div id="winkelwagenDiv" style="margin-left: 10px;">
                <p class="bold">Artikelnaam</p>
                <p class="line-height-75-winkelwagen">MSI game laptop</p>
            </div>
        </div>
        <div id="winkelwagenDivContainer" style="width: 175px;">
            <div id="winkelwagenDiv" style="width: 75px;">
                <p class="bold">Aantal</p>
                <input type="number" name="aantal" value="1">
            </div>
            <div id="winkelwagenDiv" style="width: 100px;">
                <a href="#" class="line-height-125-winkelwagen"><span class="glyphicon glyphicon-trash"> Verwijderen</a>
            </div>
        </div>
        <div id="winkelwagenDivContainer" style="margin-left: 20px;">
            <div id="winkelwagenDiv">
                <p class="bold">Prijs</p>
                <p class="line-height-75-winkelwagen">€ 1200,00</p>
            </div>
            <div id="winkelwagenDiv">
                <p class="bold">Totaal prijs</p>
                <p class="line-height-75-winkelwagen">€ 1200,00</p>
            </div>
        </div>
        <hr style="width: 100%; border-color: black;">

        <!-- Winkelwagen totaal -->
        <div id="winkelwagenTotaal">
            <p class="bold winkelwagen-p-left">Totaalprijs:</p><p class="winkelwagen-p-right">€ 1960,00</p>
            <p class="bold winkelwagen-p-left">Verzendkosten:</p><p class="winkelwagen-p-right">€ 3,50</p>
            <input type="submit" value="Bestellen" class="btn button-color">
        </div>
    </form>
</div>
<?php include 'Footer.php'; ?>