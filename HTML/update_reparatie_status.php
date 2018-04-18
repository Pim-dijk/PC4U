<?php 
    include "includes/initialize.php";

    if (isset($_GET['reparatieID']) && isset($_GET['status'])) {
        $reparatieID = $_GET['reparatieID'];
        $status = $_GET['status'];
        $newStatus = "";

        if ($status == 1) {
            $newStatus = "In behandeling";
        } else if ($status == 2) {
            $newStatus = "Voltooid";
        } else if ($status == 3) {
            $newStatus = "Defect";
        }
        
        $sql = "UPDATE reparaties SET `Status` = '$newStatus' WHERE `id`= '$reparatieID'";
        $query = $database->query($sql);
    }
    
    header("Location: AdminReparaties.php?reparatieID=$reparatieID");