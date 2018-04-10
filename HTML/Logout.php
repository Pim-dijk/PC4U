<?php
include 'Includes/initialize.php';

//unset the cookie for user or admin
if(isset($_COOKIE['login_user'])){
    setcookie('login_user', "", time() - 99999, "/");
}
if(isset($_COOKIE['login_admin'])){
    setcookie('login_admin', "", time() - 99999, "/");
}
//redirect to home
header("Location: Index.php");
?>