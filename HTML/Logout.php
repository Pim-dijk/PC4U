<?php
include 'Includes/initialize.php';

//unset the cookie for user or admin
if(isset($_COOKIE['login_user'])){
    setcookie('login_user', "", time() - 99999, "/");
}
if(isset($_COOKIE['login_admin'])){
    setcookie('login_admin', "", time() - 99999, "/");
}

//unset the orderHistory session
if(isset($_SESSION['orderHistory'])){
    unset($_SESSION['orderHistory']);
}

if (isset($_SESSION["alert-type"])) {
    unset($_SESSION["alert-type"]);
}
if (isset($_SESSION["alert-message"])) {
    unset($_SESSION["alert-message"]);
}
//redirect to home
header("Location: Index.php");
?>