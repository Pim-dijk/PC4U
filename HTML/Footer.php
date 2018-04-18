<div id="FooterContainer" class="row">

    <div id="Adress" class="col-xs-3">
        <p>Energieweg 18</p>
        <p>6915AZ</p>
        <p>Arnhem</p>
        <p>(+31) 612389164</p>
        <p>info@pc4u.com</p>
    </div>

    <div id="subMenu" class="col-xs-3">
        <ul>
            <a href="#">
                <li>Aanbiedingen</li>
            </a>
            <a href="categorieen-page.php">
                <li>Componenten</li>
            </a>
            <a href="#">
                <li>Software</li>
            </a>
            <a href="#">
                <li>Randapparatuur</li>
            </a>
            <a href="Systems.php">
                <li>Systemen</li>
            </a>
            <a href="Services.php">
                <li>Service</li>
            </a>
            <a href="Contact.php">
                <li>Contact</li>
            </a>
        </ul>
    </div>

    <div id="copyright" class="col-xs-3">
        <span>&copy; PC4U 2018</span>
    </div>

    <div id="footerSocial" class="col-xs-3">
        <a href="https://www.facebook.com/"><img src="images/Header/facebook.png" alt="facebook"></a>
        <a href="https://twitter.com/"><img src="images/Header/twitter.png" alt="twitter"></a>
        <!--/headerImg-->
    </div>

    <!--//FooterContainer-->
</div>
<!--/container-->
</div>

<!--Include scripts-->
<script src="js/hamburger.js"></script>

<!--Slick slider-->
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.2/slick/slick.min.js"></script>
</body>

</html>

<?php
if (isset($_SESSION["alert-type"]) && isset($_SESSION["alert-message"])) {
    ?>
    <div id="alertWrapper">
        <div class="alert alert-<?= $_SESSION["alert-type"] ?> alert-dismissible center-block show" role="alert">
            <?= $_SESSION["alert-message"] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <?php
    unset($_SESSION["alert-type"]);
    unset($_SESSION["alert-message"]);
}
?>

<?php
//if (isset($_SESSION["alert-type"]) && isset($_SESSION["alert-message"])) {
//    echo "<script>";
//    echo "alert('" . $_SESSION['alert-type'] . "! : " . $_SESSION['alert-message'] . "') ";
//    echo "</script>";
//    unset($_SESSION["alert-type"]);
//    unset($_SESSION["alert-message"]);
//}
//?>


