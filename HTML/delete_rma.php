<?php 
    include "includes/initialize.php";

    if (isset($_GET['RmaID'])) {
        $rmaID = $_GET['RmaID'];

        $rma = new RMA();
        $rma->id = $rmaID;
        $rma->delete();
    }

    header("Location: AdminRMAOverzicht.php");