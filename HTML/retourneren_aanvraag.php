<?php
    include "includes/initialize.php";

    if (isset($_POST['OrderID']) && isset($_POST['Reason'])) {
        $orderID = $_POST['OrderID'];
        $productID;
        if (isset($_POST['ArtNr'])) {
            $artNr = $_POST['ArtNr'];
            $sql = "SELECT ProductID FROM products WHERE ArtNumber = '$artNr'";
            $query = $database->query($sql);
            $result = $database->fetch_array($query);
            $productID = $result['ProductID'];
        }

        $retour = new Retour();
        $retour->CustomerID = $_COOKIE['login_user'];
        $retour->OrderID = $orderID;
        $retour->ProductID = $productID;
        $retour->Amount = $_POST['Amount'];
        $retour->Reason = $_POST['Reason'];
        $retour->Message = $_POST['Message'];
        $retour->Status = "Aangemeld";
        $retour->create();
    }

    header("Location: index.php");