<?php 
    include "includes/initialize.php";

    if (isset($_GET['status']) && isset($_GET['RmaID'])) {
        $rmaID = $_GET['RmaID'];
        $status = $_GET['status'];
        $newStatus = "";

        if ($status == 1) {
            $newStatus = "In behandeling";
        } else if ($status == 2) {
            $newStatus = "Ontvangen";
        } else if ($status == 3) {
            $newStatus = "Voltooid";
        }

        $sql = "UPDATE rma SET `status`='$newStatus' WHERE `id`='$rmaID'";
        $query = $database->query($sql);
    }

    header("Location: AdminRMA.php?RmaID=$rmaID");