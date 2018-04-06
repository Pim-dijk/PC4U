<?php
include 'Header.php';

$id = $_GET['id'];
$query = "DELETE FROM Images WHERE ImageID = $id";
$sql = $database->query($query);

header('Location: ' . $_SERVER['HTTP_REFERER']);
//header("Location: EditProduct.php"); /* Redirect browser */
exit();

?>