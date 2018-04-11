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
	  <h1 class="productenpagina"><?php echo $product->ArtName; ?></h1>
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
      <h2 class="productenpagina">Productbeschrijving</h2>
        <p style="padding-left:20px;"><?php echo $product->Description; ?></p>
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
              <?php for ($x = 1; $x <= 10; $x++) { 
             echo '<option value="1">'.$x.'</option>';
               } ?>
            </select>
              <input name="submit" class="voegtoebutton" type="submit" value="In winkelwagen">
          </form> 
          </div>

  </div>
</div>
  <?php } ?>
</body>

<?php require_once 'Footer.php';?>

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

