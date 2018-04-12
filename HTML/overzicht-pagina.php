<?php include 'Header.php';?>

<?php
    $result = $product->find_all();
?>

<div id="container" class="col-md-12 overzichtpagina">
  <h1 class="text-center">Alle laptops</h1>

      
  <div id="laptops">
 <?php foreach ($result as $product) { 
  $query = "SELECT * FROM images WHERE ProductID = {$product->ProductID}"; 
  $resultimage = $image->find_by_sql($query);  ?>


      <div id="laptopafbeelding" class="col-md-3 margintopafbeelding floatleft">
        <?php echo '<img src="'.$resultimage[0]->Location.'" width="190" height="160">'; ?>
      </div>
      <div id="productomschrijving" class="col-md-4">
            <h3 class="categorie"><?php echo $product->Brand ?></h3>
            <?php echo '<h2><a href="/R/webshop/producten-pagina.php?id='.$product->ProductID.'" class="link">'.$product->ArtName.'</a></h2>'; ?>
            <p><?php echo $product->Description ?>...<?php echo '<a href="/R/webshop/producten-pagina.php?id='.$product->ProductID.'" class="orangeunderline">Meer</a></p>'; ?>
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

<?php include 'footer.php';?>
