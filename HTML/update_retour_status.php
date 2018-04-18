<?php
    include "includes/initialize.php";

    if (isset($_GET['retourNummer']) && isset($_GET['status'])) {
        $retourNummer = $_GET['retourNummer'];
        $status = $_GET['status'];
        $newStatus;
        
        if ($status == 1) {
            $newStatus = "Aangemeld";
        } else if ($status == 2) {
            $newStatus = "Ontvangen";
        } else if ($status == 3) {
            $newStatus = "Voltooid";
        }

        $sql = "UPDATE retourneren SET `Status` = '$newStatus' WHERE `id`= '$retourNummer'";
        $query = $database->query($sql);
    }


    header("Location: AdminRetourneren.php?retourNummer=$retourNummer");