<?php
include 'Header.php';

if (isset($_POST['submit'])) {
	if (isset($_COOKIE['Order'])) {	
		$CookieValue = unserialize($_COOKIE["Order"]);
		
		$item_array_id = array_column($CookieValue, "item_id");
		if (!in_array($_POST["productID"], $item_array_id))
		{
			$count = count($CookieValue);

			$orderdetail->ProductID = $_POST['productID'];
			$orderdetail->Amount = $_POST['amount'];
			
			$CookieValue[$count] = $orderdetail;
			setcookie('Order', serialize($CookieValue), time() + (86400 * 30), "/");
		}
	} 
	else 
	{
		$orderdetail->ProductID = $_POST['productID'];
		$orderdetail->Amount = $_POST['amount'];

		$value = serialize(array($orderdetail));
		setcookie('Order', $value, time() + (86400 * 30), "/");

	}
	// header('Location: ' . $_SERVER['HTTP_REFERER']);
	header('Location: shoppingcart.php');
}
?>