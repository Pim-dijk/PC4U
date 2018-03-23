<?php include 'Header.php'; 
include('initialize.php')?>
<!--Content-->
<div id="Home" class="content">
	<div class="box row">
	<div class="col-xs-12"><p>Voor 22:00 besteld, morgen al in huis!</p></div>
		
	</div>

	<div id="slider" class="row col-xs-12">
	<ul class="slides">
   
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<a href="https://www.google.com">
				<img src="images/FirstTry.jpg" />
			</a>
        </div>
		<div class="nav" >
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
         	<a href="https://www.google.com">
          		<img src="images/Zoro's flag2.png" />
			</a>
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
         	<a href="https://www.google.com">
          <img src="images/Sanji's Flag.png" />
			</a>
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
         	<a href="https://www.google.com">
          		<img src="images/usopp's flag.png" />
			</a>
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
         	<a href="https://www.google.com">
         		 <img src="images/Zoro's flag2.png" />
			</a>
        </div>
		<div class="nav ">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
         	<a href="https://www.google.com">
          		<img src="images/FirstTry.jpg" />
			</a>
        </div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>
</ul>
	</div>

	<div id="Aanbiedingen" class="row">
		<h2 class="col-xs-12">Producten</h2>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<h3>Computers</h3>
			<a href="https://www.google.com">
				<img src="images/FirstTry.jpg"  class="aanbiedingImg img-responsive center-block">
			</a>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<h3>Games</h3>
			<a href="https://www.google.com">
				<img src="images/Zoro's flag2.png"  class="aanbiedingImg img-responsive center-block">
			</a>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<h3>Software</h3>
			<a href="https://www.google.com">
				<img src="images/FirstTry.jpg"  class="aanbiedingImg img-responsive center-block">
			</a>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<h3>Software</h3>
			<a href="https://www.google.com">
				<img src="images/FirstTry.jpg" class="aanbiedingImg img-responsive center-block">
			</a>
		</div>
	</div>

		<?php include 'LastSeenProducts.php'; ?>
	<!--/Content-->
</div>
<?php include 'Footer.php';
?>