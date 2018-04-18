<?php
include 'Header.php';

//Check if the user is logged in
if(isset($_COOKIE['login_user'])){
    $id = $_COOKIE['login_user'];
}

//Page content
?>
<div class="content">
    <h1>Wij bieden de volgende services aan onze klanten:</h1>
    <hr>
    <a href="Reparatie.php"><h3>Reparaties</h3></a>
    <p class="text-center">U kunt bij ons uw defecte producten te reparatie aanbieden, dit geld voor alle computer gerelateerde artikelen.</p>
    <hr>
    <a href="retourneren-pagina.php"><h3>Retouren en Garantie</h3></a>
    <p class="text-center">Uiteraard hebben wij een uitstekende garantie policy, als u voor wat voor reden dan ook niet tevreden bent met uw betelling of een gedeelte hiervan,
    kunt u deze binnen de termijn van 14 dagen kostenloos naar ons retouneren.
    Ook voor het aanvragen van garantie op een product kunt u bij ons terecht.</p>
    <hr>
    <a href="RMA.php"><h3>RMA</h3></a>
    <p>Als uw product defect geleverd wordt kunt u via ons een RMA (Return Merchandise Authorized) aanvragen, wij zullen dit dan voor u bij de fabrikant
    indienen en u het RMA nummer toesturen, op het moment dat u dit nummer ontvangen heeft kunt u het product onder vermelding van dit nummer opsturen.
    Wij handelen de aanvraag dan verder voor u af.</p>
</div>

<?php
// /Page content
include 'Footer.php';
?>