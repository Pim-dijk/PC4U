<?php
include('initialize.php');
$query = "SELECT * FROM categories";
$result = $database->query($query);
$menu = array();


?>

<!doctype html>
<html>
<meta charset="utf-8">
	<title>PC4U</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/respond.js"></script>
	
	<!--Stylesheet-->
	<link type="text/css" rel="stylesheet" href="css/opmaak.css">
	<link type="text/css" rel="stylesheet" href="css/Header.css">
	<link type="text/css" rel="stylesheet" href="css/Footer.css">

    <!--Include jQuery from cdn-->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>


<!--Body-->
<body>
	<div class="container">
		<!--Header-->
		<div id="headerContainer" class="row">
			<!--Logo-->
			<div class="col-xs-12">
				<a href="Index.php">
					<img id="logo" src="images/Header/logo.png" class="">
				</a>

				<!--Shopping Cart-->
				<a id="shoppingCart" href="#" class="pull-right">
					<img src="images/Header/shopping_cart.png" class="shoppingCart">
					<!--Itemscount in cart-->
					<p class="cartCount">2</p>
				</a>
			</div>

			<!--Hamburger Menu-->
			<div id="hamburger" href="#" class="hamburger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
	
			
			<!--Nav section-->
			<nav id="header" class="">
				<ul>
                    <a href="#">
                        <li>Aanbiedingen</li>
                    </a>

                    <div class="dropdown">
                        <li class="dropbtn">Componenten</li>
                        <div id="myDropdown" class="dropdown-content">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<a href="categorieen-page.php?id=' . $row['Category'] . '"><li>' . $row['Category'] . '</li></a>';
                            }
                            ?>
                        </div>
                    </div>

                    <a href="#">
                        <li>Software</li>
                    </a>
                    <a href="#">
                        <li>Randapparatuur</li>
                    </a>
                    <a href="#">
                        <li>Systemen</li>
                    </a>
                    <a href="#">
                        <li>Service</li>
                    </a>
                    <a href="#">
                        <li>Contact</li>
                    </a>
                    <?php
                    if(isset($_COOKIE['login_user']))
                    {
                        ?>
                        <div class="dropdown">
                            <li class="dropbtn pull-right">Account</li>
                            <div class="dropdown-content">
                                <a href="Customer.php?id=<?php echo $_COOKIE['login_user']; ?>"">Gegevens</a>
                                <a href="Logout.php">Logout</a>
                            </div>
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <a href="Login.php">
                            <li class="loginButton pull-right">Login</li>
                        </a>
                        <?php
                    }
                    ?>



				</ul>
			<!--/nav - header--> 
			</nav>
		<!--/headerContainer-->
		</div>
		
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Klant</a></li>
			<li class="active">Bestellingen</li>
		</ol>