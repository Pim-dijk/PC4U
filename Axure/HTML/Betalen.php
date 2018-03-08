<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin beheer reparaties</title>
        <link rel="stylesheet" type="text/css" href="css/Opmaak.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div id="container" class="container-fluid">
            <div id="content">
                <h1 class="text-align h1-margin">Betalen</h1>

                <div id="klantgegevens" class="div-margin">
                    <h3>Klantgegevens</h3>
                    <p class="font-weight p">Voornaam:</p><p class="p">Jan</p>
                    <p class="font-weight p">Tussenvoegsel:</p><p class="p">ter</p>
                    <p class="font-weight p">Achternaam:</p><p class="p">Aardt</p>
                    <p class="font-weight p">Straat:</p><p class="p">Testweg</p>
                    <p class="font-weight p">Huisnummer:</p><p class="p">1A</p>
                    <p class="font-weight p">Postcode:</p><p class="p">7000AB</p>
                    <p class="font-weight p">Plaats:</p><p class="p">Doetinchem</p>                 
                </div>
                <hr style="border-color: black; border-width: 2px;">
                <div id="betaalMethode">
                    <h3>Betaalmethodes</h3>
                    <form>
                        <input type="radio" name="IDeal" value="IDeal"><img src="images/IDEAL.gif" style="width: 75px; height: 50px;"> IDEAL 
                    </form>
                </div>
                <hr style="border-color: black; border-width: 2px;">
                <div id="banken">
                    <h3>Banken</h3>
                    <form>
                        <input type="radio" name="bank" value="Rabobank"><img src="images/rabobank.jpg" style="width: 75px; height: 50px;"> Rabobank <br>
                        <input type="radio" name="bank" value="ING"><img src="images/ING.png" style="width: 75px; height: 50px;"> ING <br>
                        <input type="radio" name="bank" value="ABN"><img src="images/ABN.png" style="width: 75px; height: 50px;"> ABN Ambro
                    </form>
                </div>
                <hr style="border-color: black; border-width: 2px;">
                <div id="betalen">
                    <form>
                        <input type="submit" value="Verder" class="btn button-color">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>