<?php include 'Header.php'; ?>
<div id="container" class="container-fluid">
    <div id="content">
        <h1 class="text-align h1-margin">Overzicht</h1>
        <h3>Overzicht artikelen</h3>
        
        <div id="artikelnummerOverzicht"><p>0293438459</p></div>
        <div id="artikelnaamOverzicht"><p>DXRacer chair</p></div>
        <div id="aantalOverzicht"><p>2</p></div>
        <div id="prijsOverzicht"><p>€ 379,99</p></div>
        <div id="totaalprijsOverzicht">€ 759,98</div>
        <div id="btwprijsOverzicht">Btw: € 121,34</div>
        <hr style="border-color: black; width: 100%;">

        <div id="artikelnummerOverzicht"><p>02934948500</p></div>
        <div id="artikelnaamOverzicht"><p>MSI game laptop</p></div>
        <div id="aantalOverzicht"><p>1</p></div>
        <div id="prijsOverzicht"><p>€ 1200,00</p></div>
        <div id="totaalprijsOverzicht">€ 1200,00</div>
        <div id="btwprijsOverzicht">Btw: € 233,24</div>
        <hr style="border-color: black; width: 100%;">

        <div id="totaalOverzicht">
            <p>Totaalprijs inc. verzendkosten € 1963,48</p>
            <form action="Betalen.php">
                <input type="submit" value="Betalen" class="btn btn-betalen"/>
            </form>
        </div>
    </div>
</div>
</body>
<?php include 'Footer.php'; ?>