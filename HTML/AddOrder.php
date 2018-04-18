<?php
    include "Header.php";
    if (isset($_COOKIE['Order'])) {
        $cookieArray = unserialize($_COOKIE['Order']);

        $customerID = $_COOKIE['login_user'];
        $dateOfToday = date("Y-m-d");
        $status = "In behandeling";

        $order = new Orders();
        $order->CustomerID = $customerID;
        $order->OrderDate = $dateOfToday;
        $order->Status = $status;
        $order->create();

        $sql = "SELECT OrderID FROM orders WHERE CustomerID = '$customerID' AND OrderDate = '$dateOfToday'";
        $query = $database->query($sql);
        $result = $database->fetch_array($query);

        foreach ($cookieArray as $orderdetail) {
            $orderdetail->OrderID = $result['OrderID'];
            $orderdetail->create();
        }
    }

    // header("Location: Bedankt.php");