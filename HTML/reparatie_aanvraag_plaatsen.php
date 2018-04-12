<?php
    include "includes/initialize.php";

    if (isset($_POST['artNumber']) && !empty($_POST['artNumber']) && isset($_POST['description'])) {
        $artNumber = $_POST['artNumber'];
        $sql = "SELECT `ProductID` FROM products WHERE `ArtNumber` = '$artNumber'";
        $query = $database->query($sql);
        $result = $database->fetch_array($query);

        if ($result != null) {
            $reparatie = new Reparatie();
            $reparatie->CustomerID = $_COOKIE['login_user'];
            $reparatie->ProductID = $result['ProductID'];
            $reparatie->Description = $_POST['description'];
            $reparatie->Status = "In behandeling";
            $reparatie->create();
        }

    } else if (isset($_POST['productName']) && isset($_POST['description'])) {
        $reparatie = new Reparatie();
        $reparatie->CustomerID = $_COOKIE['login_user'];
        $reparatie->ProductName = $_POST['productName'];
        $reparatie->Description = $_POST['description'];
        $reparatie->Status = "In behandeling";
        $reparatie->create();
    }

    header('Location: index.php');