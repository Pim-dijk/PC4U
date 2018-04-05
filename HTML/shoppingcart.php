<?php
if (isset($_POST['submit'])) {

	if (!isset($_COOKIE['Order'])) {
		setcookie('Order', $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	}
	
	echo $_POST['productID'];
	echo $_POST['amount'];

	$Orderdetails->ProductID = $_POST['productID'];	
	$Orderdetails->Amount = $_POST['amount'];
}
?>