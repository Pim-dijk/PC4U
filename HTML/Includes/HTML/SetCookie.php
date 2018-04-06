<?php 
    include "header.php";
    $cookieName = "Shoppingcart";
    $cookieArray = array();
    
    $Orderdetails1 = new Orderdetails();
    $Orderdetails1->ProductID = 3;
    $Orderdetails1->Amount = 1;
    $cookieArray[0] = $Orderdetails1;

    $Orderdetails2 = new Orderdetails();
    $Orderdetails2->ProductID = 4;
    $Orderdetails2->Amount = 2;
    $cookieArray[1] = $Orderdetails2;

    setcookie($cookieName, serialize($cookieArray), time() + (86400 * 30), "/"); // 86400 = 1 day
    include "footer.php";
?>