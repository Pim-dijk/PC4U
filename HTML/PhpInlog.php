<?php
include("Includes/database.php");
  session_start();
  
   if(isset($_POST["submit"])) {   
      if(isset($_POST['email'])&&isset($_POST['password']))
	  {
		  // username and password sent from form 
      
      $myemail = mysql_real_escape_string($_POST['email']);
      $mypassword = mysql_real_escape_string($_POST['password']); 
		  
		  
		$salted = "8723687hdwuyu2ygeou78t127438crb78oet8".$_POST['password'];
		$hashed = hash("sha512", $salted);
		  
      $sql = "SELECT * FROM customers WHERE email = '$myemail' AND password	 = '$hashed'";
      $result = $database->query($sql);
      $row = $result->num_rows;
      $active = $row['active'];
      $userID = $row['CustomerID'];
      
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($row >= 1) {
         
         setcookie('login_user', $userID, time() + 99999, "/");
		 echo $_COOKIE['login_user'];
         
         header("Location: home.php");
		  exit();
      } else {
		  $_SESSION["alert-type"] = "success";
		$_SESSION["alert-message"] = "Your Login Name or Password is invalid";
        
      }
	 }
   }

?>