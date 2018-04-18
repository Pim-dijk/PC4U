<?php include 'Header.php';?>

<?php
    $result = $product->find_all();
    $resultdiscount = $discount->find_all();
    $sqldiscounts="SELECT * FROM discounts";
?>

<div id="container" class="col-md-12 overzichtpagina">
  <h1 class="text-center">Alle Producten</h1>

  <div id="laptops">
 <?php foreach ($result as $product) { 
  
  $query = "SELECT * FROM images WHERE ProductID = {$product->ProductID}";
  $querydiscount = "SELECT NewPrice FROM discounts WHERE ProductID = {$product->ProductID}";
  $newprice = $discount->find_by_sql($querydiscount); 
  $resultimage = $image->find_by_sql($query);  ?>


      <div id="laptopafbeelding" style="margin-left:20px;" class="col-lg-3 col-md-3 col-sm-3 margintopafbeelding floatleft">
        <?php echo '<img src="'.$resultimage[0]->Location.'" width="190" height="160">'; ?>
      </div>
      <div id="productomschrijving" class="col-lg-6 col-md-5 col-sm-6">
            <h3 class="categorie"><?php echo $product->Brand ?></h3>
            <?php echo '<h2><a href="/R/MergeAttempt/producten-pagina.php?id='.$product->ProductID.'" class="link">'.$product->ArtName.'</a></h2>'; ?>
            <p class="verbergbeschrijvingoverzicht"><?php echo $product->Description ?>...<?php echo '<a href="/R/MergeAttempt/producten-pagina.php?id='.$product->ProductID.'" class="orangeunderline">Meer</a></p>'; ?>
      </div>

      <form method="POST" action="shoppingcart.php">
        <div id="prijsvoorraad" class="col-lg-2 col-md-2 col-sm-2">
          <?php
          if (isset($newprice[0]->NewPrice)) { ?>
            <p class="orangeunderline">€ <strike><?php echo $product->Price; ?></strike></p>

          <?php if ($product->Price >= $newprice[0]->NewPrice) { ?>
            <h2>€ <?php echo $newprice[0]->NewPrice; ?></h2> <?php
            }
          } else { ?>
            <h2>€ <?php echo $product->Price; ?> </h2> <?php
          }
            ?>
            <?php if ($product->Availability == 1) {
              echo '<p>Beschikbaar</p>';
              } else {
              echo '<p>Niet beschikbaar</p>';
              } ?>
         
          <input type="hidden" name="productID" value="<?php echo $product->ProductID ?>">
            <select name="amount">
             <?php for ($x = 1; $x <= 10; $x++) { 
             echo '<option value="1">'.$x.'</option>';
               } ?>
            </select>
              <input name="submit" class="voegtoebutton" type="submit" value="In winkelwagen">
          </form>   
      </div>
      <?php } ?>
    </div> 
  </div>

<?php include 'footer.php';?>
