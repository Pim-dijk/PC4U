<?php 
    include "includes/initialize.php";

    if (isset($_GET['reparatieID'])) {
        $reparatieID = $_GET['reparatieID'];

        $reparatie = new Reparatie();
        $reparatie->id = $reparatieID;
        $reparatie->delete();
    }

    header("Location: AdminReparatiesOverzicht.php");