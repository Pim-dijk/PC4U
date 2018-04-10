<?php
    include "initialize.php";
    $cookieArray = [];

    $item1 = new Orderdetails();
    $item1->ProductID  = 1;
    $item1->Amount = 2;

    array_push($cookieArray, $item1);

    $item2 = new Orderdetails();
    $item2->ProductID  = 4;
    $item2->Amount = 3;

    array_push($cookieArray, $item2);

    setcookie('Order', serialize($cookieArray), time() + (86400 * 30), "/");