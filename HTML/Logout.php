<?php
include 'Includes/initialize.php';

setcookie('login_user', "", time() - 99999, "/");

header("Location: Index.php");
?>