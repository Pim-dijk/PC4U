<?php
$page = "home";

include 'Header.php';

	$sql = "SELECT * FROM discounts AS d INNER JOIN images AS i on d.ProductID = i.ProductID INNER JOIN products as p on i.ProductID = p.ProductID WHERE i.featured = 1 LIMIT 6";

	$result = $database->query($sql);

	$productID = "";
	$location= "";

if(isset($_SESSION["recent-products"])){
    $recentProducts = json_decode($_SESSION["recent-products"], true);
    $viewedProducts = $recentProducts['viewed-products'];
}
?>
<!--Content-->
<div id="myCarousel" class="carousel slide content" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
        $i = 1;
        while ($row = $result->fetch_assoc()){
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


    <div id="Category" class="row">
        <h2 class="col-xs-12">Categorieën</h2>
        <hr>
        <?php

        $query = "SELECT * FROM categories";
        $results = $database->query($query);

        while ($row = $results->fetch_assoc()) {
            $category = $row['Category'];
            $img = $row['Path'];
            ?>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <h3><?=$category?></h3>
                <a href="https://www.google.com">
                    <img src="<?=$img?>"  class="categoryImg img-responsive center-block hideOverflow">
                </a>
            </div>

        <?php  } ?>
    </div>
</div>
<?php
include 'Footer.php';
?>