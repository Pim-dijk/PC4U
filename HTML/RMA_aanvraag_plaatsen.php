<?php
    include "includes/initialize.php";

    if (isset($_POST['artNumber']) && isset($_POST['orderNumber']) && isset($_POST['oorzaak'])) {
        $artNumber = $_POST['artNumber'];
        $orderNumber = $_POST['orderNumber'];
        $oorzaak = $_POST['oorzaak'];
        $customerID = $_COOKIE['login_user'];

        $sql = "SELECT `ProductID` FROM products WHERE `ArtNumber`='$artNumber'";
        $query = $database->query($sql);
        $result = $database->fetch_array($query);

        $rma = new RMA();
        $rma->CustomerID = $customerID;
        $rma->OrderID = $orderNumber;
        $rma->ProductID = $result['ProductID'];
        $rma->Oorzaak = $oorzaak;
        $rma->Status = "In behandeling";
        $rma->create();
    }

    header("Location: index.php");