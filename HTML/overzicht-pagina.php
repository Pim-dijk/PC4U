<?php include 'header.php';?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/opmaak.css">
</head>

<body>
<div id="container" class="col-md-12">
  <h1 class="center">HP laptops</h1>
    <div id="leftsidebar" class="col-md-3 border margintop">
      <form action="#">
            <h3 class="bold">Merk</h3>
          <select id="merk">
            <option value="hp">HP</option>
            <option value="Lenovo">Lenovo</option>
            <option value="asus">Asus</option>
            <option value="acer">Acer</option>
          </select>
        <h3 class="bold">Sorteren op prijs</h3>
          <select id="prijsoverzicht">
              <option value="prijs1">€ 250 - € 500</option>
              <option value="prijs2">€ 500 - € 750</option>
              <option value="prijs3">€ 750 - € 1000</option>
              <option value="prijs4">€ 1000 - € 1250</option>
              <option value="prijs4">€ 1500 - € 1750</option>
              <option value="prijs4">€ 1750 - € 2000</option>
          </select>
        <h3 class="bold">Processortype</h3>
          <select id="processor">
              <option value="corei7">Intel Core i7</option>
              <option value="corei5">Intel Core i5</option>
              <option value="corei3">Intel Core i3</option>
              <option value="celeron">Intel Celeron</option>
         </select>
        <h3 class="bold">Schermgrootte</h3>
          <select id="scherm">
              <option value="10">10 inch</option>
              <option value="11">11 inch</option>
              <option value="12">12 inch</option>
              <option value="13">13 inch</option>
              <option value="14">14 inch</option>
              <option value="15">15 inch</option>
              <option value="17">17 inch</option>
          </select>
        <br>
              <button class="filteroverzicht">Filter</button>
      </form>
</div>

  <div id="allesoverzicht" class="border">
  <div id="contentoverzicht" class="col-md-3 margintop">
              <img class="floatleft" src="img/hp-15.png" width="200" height="150">
      </div>
      <div id="text" class="col-md-4">
            <h3 class="categorie">HP</h3>
            <h2><a href="file:///C:/Users/rikbo/Desktop/webshop%20PHP/Categorieën-page/producten-pagina.html" class="link">HP 15-bw022nd</a></h2>
            <p>De HP 15-bw022nd is geschikt voor het bekijken van films en series in hoge beeldkwaliteit. Het Full HD scherm zorgt voor een…<a href="#" style="color:#FF6600; text-decoration:underline;">Meer</a></p>
      </div>
      <div id="prijzenoverzicht" class="col-md-2">
        <h2>€ 499,-</h2>
        <p>Op voorraad</p>
          <form>
            <select>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
            </select>
              <input class="button" type="button" value="In winkelwagen">
          </form>
      </div>

      <div id="contentoverzicht" class="col-md-3 margintop">
                  <img class="floatleft" src="img/lenovo.jpg" width="200" height="150">
          </div>
          <div id="text" class="col-md-4 col-sm-5">
                <h3 class="categorie">HP</h3>
                <h2><a href="file:///C:/Users/rikbo/Desktop/webshop%20PHP/Categorieën-page/producten-pagina.html" class="link">HP 16-bw022nd</a></h2>
                <p>De HP 16-bw022nd is geschikt voor het bekijken van films en series in hoge beeldkwaliteit. Het Full HD scherm zorgt voor een…
                <a href="#" style="color:#FF6600; text-decoration:underline;">Meer</a></p>
          </div>
          <div id="prijzenoverzicht" class="col-md-2">
            <h2>€ 799,-</h2>
            <p>Op voorraad</p>
              <form>
                <select>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                </select>
                  <input class="button" type="button" value="In winkelwagen">
              </form>
          </div>
    </div>
  </div>
</body>
<?php include 'footer.php';?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
