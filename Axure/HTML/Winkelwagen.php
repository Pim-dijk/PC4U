<html>
    <head>
        <meta charset="UTF-8"></meta>
        <title>Winkelwagen</title>
        <link type="text/css" rel="stylesheet" href="Winkelwagen.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div id="container" class="container-fluid">
            <h1 class="align-center margin-bottom">Winkelwagen</h1>
            <div class="row">
                <div id="content">
                    <form>
                        <div id="image"><img src="chair.jpg" /></div>
                        <div id="productName"><p>DXRacer Chair</p></div>
                        <div id="aantal"><input type="number" value="2" class="txt-aantal" style="width: 50px;" /></div>
                        <div id="verwijderen"><input type="submit" value="Verwijderen" class="btn button-color button-verwijderen" /></div>
                        <div id="prijs"><p class="align-center">€ 379,99</p></div>
                        <div id="totaalPrijs"><p class="align-center">€ 759,98</p></div>
                        <hr style="border-color: black; width: 100%;">

                        <div id="image"><img src="laptop.jpg" /></div>
                        <div id="productName"><p>DXRacer Chair</p></div>
                        <div id="aantal"><input type="number" value="1" class="txt-aantal" style="width: 50px;" /></div>
                        <div id="verwijderen"><input type="submit" value="Verwijderen" class="btn button-color button-verwijderen" /></div>
                        <div id="prijs"><p class="align-center">€ 1200,00</p></div>
                        <div id="totaalPrijs"><p class="align-center">€ 1200,00</p></div>
                        <hr style="border-color: black; width: 100%;">

                        <div id="shoppingCart-total">
                            <p class="bold font-size p-left">Totaal artikelen:</p><p class="font-size p-right">€ 1958,98</p>
                            <p class="bold font-size p-left">Verzendkosten:</p><p class="font-size p-right">€ 3,50</p>
                            <input type="submit" value="Bestellen" class="btn button-color" style="float: right; margin: 10px 10px 15px 0px;" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>