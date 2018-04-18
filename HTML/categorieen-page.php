<?php include 'Header.php';?>

<?php
    $result = $product->find_all();
?>

<body>
<div id="container" class="col-md-12 overzichtpagina">
  <h1 class="text-center">(Categorie) laptops</h1>
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
      
  <div id="laptops">
 <?php foreach ($result as $product) { 
  $query = "SELECT * FROM images WHERE ProductID = {$product->ProductID}"; 
  $resultimage = $image->find_by_sql($query);  ?>

      <div id="laptopafbeelding" class="col-md-3 margintopafbeelding floatleft">
        <?php echo '<img src="'.$resultimage[0]->Location.'" width="180" height="150">'; ?>
      </div>
      <div id="productomschrijving" class="col-md-4">
            <h3 class="categorie"><?php echo $product->Brand ?></h3>
            <?php echo '<h2><a href="producten-pagina.php?id='.$product->ProductID.'" class="link">'.$product->ArtName.'</a></h2>'; ?>
            <p><?php echo $product->Description ?>...<?php echo '<a href="producten-pagina.php?id='.$product->ProductID.'" class="orangeunderline">Meer</a></p>'; ?>
      </div>
      <form method="POST" action="shoppingcart.php">
        <div id="prijsvoorraad" class="col-md-2">
          <h2>€ <?php echo $product->Price?></h2>
            <?php if ($product->Availability == 1) {
              echo '<p>Beschikbaar</p>';
              } else {
              echo '<p>Niet beschikbaar</p>';
              } ?>
         
          <input type="hidden" name="productID" value="<?php echo $product->ProductID ?>">
            <select name="amount">
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
              <input name="submit" class="voegtoebutton" type="submit" value="In winkelwagen">
          </form>   
      </div>
      <?php } ?>
    </div> 
  </div>
</body>
<?php include 'Footer.php';?>
