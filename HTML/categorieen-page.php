<?php include 'header.php';?>

<body>
<div id="container" class="col-md-12 categoriepagina">
	<h1 class="text-center">Alle Laptops</h1>
    <div id="leftsidebar" class="col-md-3 bodyborder margintop">
    	<form action="#">

          <h3 class="removemobile" style="font-weight: bold">Merk</h3>
            <select id="merk">
        		  <option value="hp">HP</option>
       			  <option value="Lenovo">Lenovo</option>
        			<option value="asus">Asus</option>
        			<option value="acer">Acer</option>
    		    </select>

          <h3 class="removemobile" style="font-weight: bold">Sorteren op prijs</h3>
            <select id="prijsoverzicht">
      		  	<option value="prijs1">€ 250 - € 500</option>
     			    <option value="prijs2">€ 500 - € 750</option>
      			  <option value="prijs3">€ 750 - € 1000</option>
      			  <option value="prijs4">€ 1000 - € 1250</option>
              <option value="prijs5">€ 1500 - € 1750</option>
              <option value="prijs6">€ 1750 - € 2000</option>
    		    </select>

          <h3 class="removemobile" style="font-weight: bold">Processortype</h3>
            <select id="processor">
      		  	<option value="corei7">Intel Core i7</option>
     			    <option value="corei5">Intel Core i5</option>
      			  <option value="corei3">Intel Core i3</option>
      			  <option value="celeron">Intel Celeron</option>
    		    </select>

          <h3 class="removemobile" style="font-weight: bold">Schermgrootte</h3>
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
          <a class="filterpopup text-center" href="javascript:window.open('filter.php','mypopuptitle','width=600,height=400')">Open filter</a>
              <button class="filter">Filter</button>
    	</form>
    </div>

  <div id="laptops">
    <div id="laptopafbeelding" class="col-md-3 margintopafbeelding floatleft">
        <a href="#"><img class="floatleft" src="img/hp-15.png" width="200" height="150"></a>
    </div>

      <div id="productomschrijving" class="col-md-4">
            <h3 class="categorie">HP</h3>
            <h2><a href="#" class="link">HP 15-bw022nd</a></h2>
            <p>De HP 15-bw022nd is geschikt voor het bekijken van films en series in hoge beeldkwaliteit. Het Full HD scherm zorgt voor een…<a href="#" class="orangeunderline">Meer</a></p>
      </div>

      <div id="prijsvoorraad" class="col-md-2">
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
              <input class="voegtoebutton" type="button" value="In winkelwagen">
          </form>
      </div>

      <div id="laptopafbeelding1" class="col-md-3 margintopafbeelding floatleft">
        <img class="floatleft" src="img/lenovo.jpg" width="200" height="150">
      </div>
      
          <div id="productomschrijving1" class="col-md-4 col-sm-5">
                <h3 class="categorie">Lenovo</h3>
                <h2><a href="#" class="link">Lenovo IdeaPad 520s</a></h2>
                <p>Lenovo IdeaPad 520s-14IKB 80X2002TMH is, een aluminium unibody laptop, geschikt voor het bekijken van films en series in hoge...
                <a href="#" class="orangeunderline">Meer</a></p>
          </div>

          <div id="prijsvoorraad1" class="col-md-2">
            <h2>€ 899,-</h2>
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
                  <input class="voegtoebutton" type="button" value="In winkelwagen">
              </form>
          </div>
    </div>
  </div>
</body>
<?php include 'footer.php';?>


