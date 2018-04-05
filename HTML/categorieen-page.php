<?php include 'Header.php';
include 'initialize.php';
	//	$id = $_GET['Category'];
      	$sql = "select * from products";
		$result = $database->query($sql);
 
?>
<div id="category-container" class="row overzichtpagina">
  
    <div id="leftsidebar" class="col-md-3 col-xs-12 bodyborder margintop">
      <form action="#">
            <h3 class="removemobile" style="font-weight: bold">Merk</h3>
          <select class="form-control" id="merk">
            <option value="hp">HP</option>
            <option value="Lenovo">Lenovo</option>
            <option value="asus">Asus</option>
            <option value="acer">Acer</option>
          </select>
        <h3 class="removemobile" style="font-weight: bold">Sorteren op prijs</h3>
          <select class="form-control" id="prijsoverzicht">
              <option value="prijs1">€ 250 - € 500</option>
              <option value="prijs2">€ 500 - € 750</option>
              <option value="prijs3">€ 750 - € 1000</option>
              <option value="prijs4">€ 1000 - € 1250</option>
              <option value="prijs4">€ 1500 - € 1750</option>
              <option value="prijs4">€ 1750 - € 2000</option>
          </select>
        <h3 class="removemobile" style="font-weight: bold">Processortype</h3>
          <select class="form-control" id="processor">
              <option value="corei7">Intel Core i7</option>
              <option value="corei5">Intel Core i5</option>
              <option value="corei3">Intel Core i3</option>
              <option value="celeron">Intel Celeron</option>
         </select>
        <h3 class="removemobile" style="font-weight: bold">Schermgrootte</h3>
          <select class="form-control" id="scherm">
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
	$product = $row["ArtName"];
	$description = $row['Description'];
	$price = $row['Price'];
	$availability = $row['Availability']; 
?>
  
  <div id="laptops" class="col-sm-9 col-xs-12">
   <h1 class="text-center">HP laptops</h1>
    <div id="laptopafbeelding" class="col-md-3 margintopafbeelding floatleft">
      <img src="img/hp-15.png" width="200" height="150">
    </div>

      <div id="productomschrijving" class="col-md-4">
            <h3 class="categorie">HP</h3>
		<?php 
	 		echo '<h2><a href="/R/webshop/producten-pagina.php?ID='.$row['ProductID'].'" class="link">'.$product.'</a></h2>'; 
	    ?>
            <p><?php echo $description; ?><a href="#" class="orangeunderline">Meer</a></p>
      </div>

      <div id="prijsvoorraad" class="col-md-2">
        <h2>€ <?php echo $price; ?></h2>
        <?php if ($availability == 1) 
		{
          	echo '<p>Op voorraad</p>';
	    } else 
		{
            echo '<p>Niet op voorraad</p>';
        }?>
          <form>
            <select class="form-control">
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
      
      <div id="laptops" class="col-sm-9 col-xs-12">
   <h1 class="text-center">HP laptops</h1>
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
            <select class="form-control">
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

<?php include 'Footer.php';?>