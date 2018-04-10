<?php  
    include "Includes/initialize.php";

    if (isset($_POST['totalProducts'])) {
        $totalProducts = $_POST['totalProducts'];
        $cookieName = "Order";
        $cookieArray = array();

        for ($i = 0; $i < $totalProducts; $i++) {
            $productID = $_POST['productID-'.$i];
            
            $amountPostName = "aantal-".$productID;
            $amount = $_POST[$amountPostName];
            
            $details = new Orderdetails();
            $details->ProductID = $productID;
            $details->Amount = $amount;

            array_push($cookieArray, $details);
        }
        setcookie($cookieName, serialize($cookieArray), time() + (86400 * 30), "/"); // 86400 = 1 day
    }

    header("Location: bestelling_overzicht.php");

    include "footer.php";