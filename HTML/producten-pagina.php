<?php include 'Header.php';?>

<?php
    // Methode om ID te krijgen. 
    if(isset($_GET['id'])) {
    $id = $_GET["id"];
    $product->id = $id;
    $query = "SELECT * FROM products WHERE ProductID = {$id}";
    $result = $product->find_by_sql($query); 
    }

?>

<body>
<?php foreach ($result as $product) { 
 $query = "SELECT * FROM images WHERE ProductID = {$product->ProductID}"; 
  $resultimage = $image->find_by_sql($query);
  ?>

<div id="container" class="productenpagina">
  <div class="col-md-6">
	  <h1><?php echo $product->ArtName; ?></h1>
      <div class="sliderafbeeldingen">

        <div class="slider-for">
        <?php foreach ($resultimage as $image) {
         echo '<div><img src="'.$image->Location.'" width="100%"></div>';
        } ?>
        </div>
      
        <div class="slider-nav">
        <?php foreach($resultimage as $image) {
          echo '<div><img src="'.$image->Location.'" width="100%"></div>';
         } ?>
        </div>
      </div>

    <div class="productbeschrijving">
      <h2>Productbeschrijving</h2>
        <p><?php echo $product->Description; ?></p>
    </div>
  </div>

  <div id="alles" class="col-md-6 floatleft">
          
      <form method="POST" action="shoppingcart.php">
        <div id="prijzen">
          <h2>€ <?php echo $product->Price?></h2>
            <?php if ($product->Availability == 1) {
              echo '<p>Beschikbaar</p>';
              } else {
              echo '<p>Niet beschikbaar</p>';
              } ?>
         <p>Voor 24:00 besteld, morgen in huis!</p>
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

  </div>
</div>
  <?php } ?>
</body>

<?php require_once 'Footer.php';?>

<script type="text/javascript" src="slick-1.8.0/slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
   $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
});
</script>

