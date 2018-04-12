<?php include 'Header.php'; 
include('initialize.php')?>
<?php
	
	$sql = "SELECT * FROM discounts AS d INNER JOIN Images AS i on d.ProductID = i.ProductID INNER JOIN products as p on i.ProductID = p.ProductID WHERE i.featured = 1 LIMIT 6";
	
	$result = $database->query($sql);

	$rows = mysqli_fetch_all($result, MYSQL_ASSOC);

	$productID = "";
	$location= "";

if(isset($_SESSION["recent-products"])){
    $recentProducts = json_decode($_SESSION["recent-products"], true);
    $viewedProducts = $recentProducts['viewed-products'];
}


?>

<!--Content-->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
<!--
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
	
<?php 
		$i = 1;
		foreach($rows as $row){
			$productID = $row['ProductID'];
			$location = $row['Location'];
			$price = $row['NewPrice'];
			$name =  $row['ArtName'];
		?>
		
		<div class="item <?php if($i == 1){ active;}?>">
       <a href="#">
        <img src="<?=$location?>"  style="width:100%;">
        <div class="carousel-caption">
          <h3><?=$name?></h3>
          <p>€<?=$price?></p>
        </div>
			</a>
      </div>
		
        <?php
		$i++;							
		}
		
		?>
      

<!--
      <div class="item">
        <img src="images/products/Whitebeard's flag.png" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="item">
        <img src="images/products/Shank's flag.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
-->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <div id="Aanbiedingen" class="row">
		<h2 class="col-xs-12">Producten</h2>
<?php 
	 	$query = "SELECT * FROM categories";
	 	$results = $database->query($query);
	 	
	 	
	 while ($row = mysqli_fetch_assoc($results)) {
		 $category = $row['Category'];
	 	$img = $row['Path'];
    // echo '<a href="categorieen-page.php?id=' . $row['Category'] . '"><li>' . $row['Category'] . '</li></a>';
                           

	 ?>

	
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<h3><?=$category?></h3>
			<a href="https://www.google.com">
				<img src="<?=$img?>"  class="aanbiedingImg img-responsive center-block">
			</a>
		</div>
<!--
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<h3>Games</h3>
			<a href="https://www.google.com">
				<img src="images/products/Zoro's flag2.png"  class="aanbiedingImg img-responsive center-block">
			</a>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<h3>Software</h3>
			<a href="https://www.google.com">
				<img src="images/products/FirstTry.jpg"  class="aanbiedingImg img-responsive center-block">
			</a>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<h3>Software</h3>
			<a href="https://www.google.com">
				<img src="images/products/FirstTry.jpg" class="aanbiedingImg img-responsive center-block">
			</a>
		</div>
	</div>
-->
<?php  } ?>
</div>
<?php include 'Footer.php';
?>