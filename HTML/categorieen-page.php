<?php include 'Header.php';?>

<?php
    
    $resultdiscount = $discount->find_all();

    
    $sql="SELECT * FROM products";
    extract($_POST);

    $sqldiscounts="SELECT * FROM discounts";

    $brandsql = "SELECT DISTINCT Brand FROM products";
    $brands = $product->find_by_sql($brandsql);

    $processorsql = "SELECT DISTINCT Property1 FROM products";
    $processors = $product->find_by_sql($processorsql);

    $screensizesql = "SELECT DISTINCT Property2 FROM products";
    $screensizes = $product->find_by_sql($screensizesql);

    if (isset($_POST['submit'])) {

      $brand = $_POST['brand'];

      $processor = $_POST['processor'];

      $screensize = $_POST['screensize'];

      $price = $_POST['price'];
      switch ($price) {
        case "prijs0":
          $price1 = 0;
          $price2 = 250;
          break;
        case "prijs1":
          $price1 = 250;
          $price2 = 500;
          break;
        case "prijs2":
          $price1 = 500;
          $price2 = 750;
          break;
        case "prijs3":
          $price1 = 750;
          $price2 = 1000;
          break;
        case "prijs4":
          $price1 = 1000;
          $price2 = 1250;
          break;
        case "prijs5":
          $price1 = 1250;
          $price2 = 1500;
          break;
        case "prijs6":
          $price1 = 1500;
          $price2 = 1750;
          break;
      }
    $sql = "SELECT * FROM products WHERE Brand = '$brand' AND Property1 = '$processor' AND Property2 = '$screensize' AND Price BETWEEN '$price1' AND '$price2'";
    }

    $result = $product->find_by_sql($sql);
?>

<body>
<div id="container" class="col-md-12 overzichtpagina">
  <h1 class="text-center"></h1>
  <?php if(isset($_POST['submit'])) {
  echo '<h1 class="text-center">'.$brand.'</h1>'; 
   } else {
    echo '<h1 class="text-center">Laptops</h1>';
  }
   ?>

    <div id="leftsidebar" class="col-md-3 margintop">
      <form method="POST" action="">
          <!-- MERK -->
            <h3 class="removemobile" style="font-weight: bold">Merk</h3>
          <select name="brand" id="merk">
        <?php foreach ($brands as $brand) { ?>
            <option value="<?php echo $brand->Brand ?>"><?php echo $brand->Brand ?></option>
        <?php } ?>
          </select>
          <!-- PRIJS -->
        <h3 class="removemobile" style="font-weight: bold">Sorteren op prijs</h3>
          <select name="price" id="prijsoverzicht">
              <option value="prijs0">€ 0   - € 200</option>
              <option value="prijs1">€ 250 - € 500</option>
              <option value="prijs2">€ 500 - € 750</option>
              <option value="prijs3">€ 750 - € 1000</option>
              <option value="prijs4">€ 1000 - € 1250</option>
              <option value="prijs5">€ 1250 - € 1500</option>
              <option value="prijs6">€ 1500 - € 1750</option>
          </select>
          <!-- PROCESSORTYPE -->
        <h3 class="removemobile" style="font-weight: bold">Processortype</h3>
          <select name="processor" id="processor">
          <?php foreach ($processors as $processor) { ?>
              <option value="<?php echo $processor->Property1 ?>"><?php echo $processor->Property1 ?></option>
              <?php } ?>
         </select>
         <!-- SCHERMGROOTTE -->
        <h3 class="removemobile" style="font-weight: bold">Schermgrootte</h3>
          <select name="screensize" id="scherm">
          <?php foreach ($screensizes as $screensize) { ?>
              <option value="<?php echo $screensize->Property2 ?>"><?php echo $screensize->Property2 ?></option>
              <?php } ?>
          </select>

        <br>
              <a class="filterpopup text-center" href="javascript:window.open('/r/MergeAttempt/Includes/filter.php','mypopuptitle','width=600,height=400')">Open filter</a>
              <button class="filter" name="submit" type="submit">Filter</button>
      </form>
      </div>
  
     
      
  <div id="laptops">
 <?php foreach ($result as $product) { 
  $query = "SELECT * FROM images WHERE ProductID = {$product->ProductID}"; 
  $querydiscount = "SELECT NewPrice FROM discounts WHERE ProductID = {$product->ProductID}";
  $newprice = $discount->find_by_sql($querydiscount);
  $resultimage = $image->find_by_sql($query);  ?>

      <div id="laptopafbeelding" class="col-md-3 margintopafbeelding floatleft">
        <?php echo '<img src="'.$resultimage[0]->Location.'" width="180" height="150">'; ?>
      </div>
      <div id="productomschrijving" class="col-md-4">
            <h3 class="categorie"><?php echo $product->Brand ?></h3>
            <?php echo '<h2><a href="/R/MergeAttempt/producten-pagina.php?id='.$product->ProductID.'" class="link">'.$product->ArtName.'</a></h2>'; ?>
            <p class="verbergbeschrijving"><?php echo $product->Description ?>...<?php echo '<a href="/R/MergeAttempt/producten-pagina.php?id='.$product->ProductID.'" class="orangeunderline">Meer</a></p>'; ?>
      </div>
      <form method="POST" action="shoppingcart.php">
        <div id="prijsvoorraad" class="col-md-2">

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
</body>
<?php include 'footer.php';?>
