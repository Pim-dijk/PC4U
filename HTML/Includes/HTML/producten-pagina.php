<?php include 'header.php';?>
<?php include 'databaseconfig.php';?>
<?php
    
// Methode om ID te krijgen. 
    $id = $_GET["ID"];
    $query = "SELECT ProductID FROM products WHERE ProductID = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $productid = $row['ProductID'];

    $sql = "select * from products WHERE ProductID = '$productid'";
    $result = mysqli_query($conn, $sql);
?>

<body>
<?php
 while( $row = mysqli_fetch_array($result) ){
  ?>
  <?php
            $product = $row["ArtName"];
            $description = $row['Description'];
            $price = $row['Price'];
            $availability = $row['Availability']; ?>

<div id="container" class="productenpagina">
  <div class="col-md-6">
	  <h1><?php echo $product; ?></h1>
      <div class="sliderafbeeldingen">

        <div class="slider-for">
          <div><img src="img/hp-15-1.png" width="100%" height="auto"></div>
          <div><img src="img/hp-15-2.png" width="100%" height="auto"></div>
          <div><img src="img/hp-15-3.jpg" width="100%" height="auto"></div>
          <div><img src="img/hp-15-4.png" width="100%" height="auto"></div>
        </div>
      
        <div class="slider-nav">
          <div><img src="img/hp-15-1.png" width="100%" height="auto"></div>
          <div><img src="img/hp-15-2.png" width="100%" height="auto"></div>
          <div><img src="img/hp-15-3.jpg" width="100%" height="auto"></div>
          <div><img src="img/hp-15-4.png" width="100%" height="auto"></div>
        </div>
      </div>

    <div class="productbeschrijving">
      <h2>Productbeschrijving</h2>
        <p><?php echo $description; ?></p>
    </div>
  </div>

  <div id="alles" class="col-md-6 floatleft">
          <div id="prijzen">
            <h2>€ <?php echo $price; ?></h2>
            <?php if ($availability == 1) {
          echo '<p>Op voorraad</p>';
          } else {
            echo '<p>Niet op voorraad</p>';
            } ?>
            <p>Voor 23:59 uur besteld, morgen in huis</p>
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
                <br>
                  <input class="voegtoebutton" type="button" value="In winkelwagen">
              </form>
          </div>

  </div>
</div>
<?php } ?>
</body>

<?php require_once 'footer.php';?>

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
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
});
</script>