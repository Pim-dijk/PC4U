<?php include 'Header.php'; ?>
<div id="content">
    <h1 class="text-center h1-margin">Betalen</h1>

    <div id="betalenUitlijningDiv">
        <form action="Bedankt.php">
            <div id="betalenDiv">
                <h3>Klantgegevens</h3>
                <p class="bold betalen-p-left">Voornaam:</p><p class="betalen-p-right">Jan</p>
                <p class="bold betalen-p-left">Tussenvoegsel:</p><p class="betalen-p-right">ter</p>
                <p class="bold betalen-p-left">Achternaam:</p><p class="betalen-p-right">Aardt</p>
                <p class="bold betalen-p-left">Straat:</p><p class="betalen-p-right">Testweg</p>
                <p class="bold betalen-p-left">Huisnummer:</p><p class="betalen-p-right">1A</p>
                <p class="bold betalen-p-left">Postcode:</p><p class="betalen-p-right">7000AB</p>
                <p class="bold betalen-p-left">Plaats:</p><p class="betalen-p-right">Doetinchem</p>                 
            </div>
            <hr style="border-color: black; border-width: 2px; width: 100%;">
            <div id="betalenDiv">
                <h3>Betaalmethodes</h3>
                <input type="radio" name="IDeal" value="IDeal"><img src="images/IDEAL.gif" style="width: 75px; height: 50px;"> IDEAL 
            </div>
            <hr style="border-color: black; border-width: 2px; width: 100%;">
            <div id="betalenDiv">
                <h3>Banken</h3>
                <input type="radio" name="bank" value="Rabobank"><img src="images/rabobank.jpg" style="width: 75px; height: 50px;"> Rabobank <br>
                <input type="radio" name="bank" value="ING"><img src="images/ING.png" style="width: 75px; height: 50px;"> ING <br>
                <input type="radio" name="bank" value="ABN"><img src="images/ABN.png" style="width: 75px; height: 50px;"> ABN Ambro
            </div>
            <hr style="border-color: black; border-width: 2px; width: 100%;">
            <div id="betalenDiv">
                <input type="submit" value="Bestelling afronden" class="btn button-color">
            </div>
        </form>
    </div>
</div>
<?php include 'Footer.php'; ?>