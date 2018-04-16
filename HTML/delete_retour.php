<?php 
    include "includes/initialize.php";

    if (isset($_GET['retourNummer'])) {
        $retourNummer = $_GET['retourNummer'];
        
        $retour = new Retour();
        $retour->id = $retourNummer;
        $retour->delete();
    }

    header("Location: AdminRetournerenOverzicht.php");