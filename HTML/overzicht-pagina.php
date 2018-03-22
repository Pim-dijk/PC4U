<?php include 'header.php';?>
<?php include 'databaseconfig.php';?>
<?php
      $sql = "select * from products";
      $result = mysqli_query($conn, $sql);

?>
<body>
<div id="container" class="col-md-12 overzichtpagina">
  <h1 class="text-center">HP laptops</h1>
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
              <option value="prijs4">€ 1500 - € 1750</option>
              <option value="prijs4">€ 1750 - € 2000</option>
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
<?php
 while( $row = mysqli_fetch_array($result) ){
  ?>
   <?php
            $product = $row["ArtName"];
            $description = $row['Description'];
            $price = $row['Price'];
            $availability = $row['Availability']; ?>
  
  <div id="laptops">
    <div id="laptopafbeelding" class="col-md-3 margintopafbeelding floatleft">
      <img src="img/hp-15.png" width="200" height="150">
    </div>

      <div id="productomschrijving" class="col-md-4">
            <h3 class="categorie">HP</h3>
            <?php echo '<h2><a href="/R/webshop/producten-pagina.php?ID='.$row['ProductID'].'" class="link">'.$product.'</a></h2>'; ?>
            <p><?php echo $description; ?><a href="#" class="orangeunderline">Meer</a></p>
      </div>

      <div id="prijsvoorraad" class="col-md-2">
        <h2>€ <?php echo $price; ?></h2>
        <?php if ($availability == 1) {
          echo '<p>Op voorraad</p>';
          } else {
            echo '<p>Niet op voorraad</p>';
            } ?>
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
      </div><?php } ?>

      <div id="laptopafbeelding1" class="col-md-3 margintopafbeelding floatleft">
        <img src="img/lenovo.jpg" width="200" height="150">
      </div>

          <div id="productomschrijving1" class="col-md-4 col-sm-5">
                <h3 class="categorie">HP</h3>
                <h2><a href="#" class="link">HP 16-bw022nd</a></h2>
                <p>De HP 16-bw022nd is geschikt voor het bekijken van films en series in hoge beeldkwaliteit. Het Full HD scherm zorgt voor een…
                <a href="#" class="orangeunderline">Meer</a></p>
          </div>

          <div id="prijsvoorraad1" class="col-md-2">
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
                  <input class="voegtoebutton" type="button" value="In winkelwagen">
              </form>
          </div>
  </div>
</body>

<?php include 'footer.php';?>
