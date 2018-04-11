<?php

//Set active link with $page = "name of the page' before including header.php

session_start();
include('Includes/initialize.php');

//Find all available categories from the database
//these will be displayed as a dropdown in the nav menu
$query = "SELECT * FROM categories";
$result = $database->query($query);
$menu = array();

?>

<!doctype html>
<html>
<meta charset="utf-8">
<title>PC4U</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Include jQuery from cdn-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script src="js/ajaxLiveSearch.js"></script>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/respond.js"></script>

<!--Stylesheet-->
<link type="text/css" rel="stylesheet" href="css/opmaak.css">
<link type="text/css" rel="stylesheet" href="css/opmaak_rik.css">
<link type="text/css" rel="stylesheet" href="css/opmaak_ivan.css">


<!--slick slider-->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.2/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.2/slick/slick-theme.css"/>

<!--Body-->
<body>
<div class="container">
    <!--Header-->
    <div id="headerContainer" class="row">
        <!--Logo-->
        <div class="col-xs-12">
            <a href="/pc4u/html">
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
                <div class="dropdown">
                    <a href="#">
                        <li class="<?php echo ($page == "aanbiedingen" ? "active" : "")?>">Aanbiedingen</li>
                    </a>
                </div>

                <div class="dropdown">
                    <li class="dropbtn">Componenten</li>
                    <div id="myDropdown" class="dropdown-content">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<a href="categorieen-page.php?cat=' . $row['Category'] . '"><li>' . $row['Category'] . '</li></a>';
                        }
                        ?>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#">
                        <li class="<?php echo ($page == "software" ? "active" : "")?>">Software</li>
                    </a>
                </div>
                <div class="dropdown">
                    <a href="#">
                        <li class="<?php echo ($page == "randapparatuur" ? "active" : "")?>">Randapparatuur</li>
                    </a>
                </div>
                <div class="dropdown">
                    <a href="#">
                        <li class="<?php echo ($page == "systemen" ? "active" : "")?>">Systemen</li>
                    </a>
                </div>
                <div class="dropdown">
                    <a href="#">
                        <li class="<?php echo ($page == "service" ? "active" : "")?>">Service</li>
                    </a>
                </div>
                <div class="dropdown">
                    <a href="Contact.php">
                        <li class="<?php echo ($page == "contact" ? "active" : "")?>">Contact</li>
                    </a>
                </div>
                <?php
                if (isset($_COOKIE['login_user'])) {
                    ?>
                    <div class="dropdown">
                        <li class="dropbtn pull-right">Account</li>
                        <div id="loginDropdown" class="dropdown-content">
                            <a href="Customer.php?id=<?php echo $_COOKIE['login_user']; ?>""><li>Gegevens</li></a>
                            <a href="Logout.php"><li>Logout</li></a>
                        </div>
                    </div>
                    <?php
                }
                else if(isset($_COOKIE['login_admin'])){
                    ?>
                    <div class="dropdown">
                        <li class="dropbtn pull-right">Admin</li>
                        <div id="loginDropdown" class="dropdown-content">
                            <a href="Admin.php""><li>Admin Panel</li></a>
                            <a href="Logout.php"><li>Logout</li></a>
                        </div>
                    </div>
                    <?php
                }
                else {
                    ?>
                    <a href="Login.php">
                        <li class="loginButton pull-right">Login<li>
                    </a>
                    <?php
                }
                ?>


            </ul>
            <!--/nav - header-->
        </nav>
        <!--/headerContainer-->
    </div>

<!--    <ol class="breadcrumb">-->
<!--        --><?php
//        if($_SERVER["REQUEST_URI"] != "/pc4u/html/")
//        {
//            $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
//            //echo "<li><a href='/pc4u/html/'>Home</a></li>";
//            foreach($crumbs as $crumb)
//            {
//                if($crumb != "pc4u" && $crumb != "html")
//                {
//                    //If it's the category page, do some other logic
//                    if(strpos($crumb, '?cat=') !== false)
//                    {
//                        $crumb = explode("?cat=", $crumb);
//                        $append = $crumb[0];
//                        foreach($crumb as $crum)
//                        {
//                            if($crum == "categorieen-page.php")
//                            {
//                                echo "<li><a href='" . $crum . "'>" . ucfirst(str_replace(array(".php","_"),array(""," "),$crum) . ' ') . "</a></li>";
//                            }
//                            else
//                            {
//                                echo "<li class='lastBc'>" . ucfirst(str_replace(array(".php","_"),array(""," "),$crum) . ' ') . "</a></li>";
//                            }
//                        }
//                    }
//                    else if(strpos($crumb, '?id=') !== false)
//                    {
//                        $crumb = explode("?id=", $crumb);
//                        $append = $crumb[1];
//                        foreach($crumb as $crum)
//                        {
//                            if($crum == "Customer.php")
//                            {
//                                echo "<li class='lastBc'>" . ucfirst(str_replace(array(".php","_"),array(""," "),$crum) . ' ') . "</a></li>";
//                            }
//                        }
//                    }
//                    else
//                    {
//                        echo "<li class='lastBc'>" . ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ') . "</a></li>";
//                    }
//
//                }
//            }
//        }
//        ?>
<!--    </ol>-->