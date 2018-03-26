<?php
include("Header.php");
  
   if(isset($_POST["submit"])) {   
      if(isset($_POST['email'])&&isset($_POST['password']))
	  {
		  // username and password sent from form 
      
      $myemail = ($_POST['email']);
      $mypassword = ($_POST['password']);
		  
		$salted = "8723687hdwuyu2ygeou".$_POST['password']."78t127438crb78oet8";
		$hashed = hash("sha512", $salted);
		  
      $sql = "SELECT * FROM customers WHERE email = '$myemail' AND password	 = '$hashed'";
      $user = new User();
      $result = $user->find_by_sql($sql);
      $user = $result['0'];
      $CustomerID = $user->CustomerID;
      
      
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($CustomerID != NULL || $CustomerID != "") {
         
         setcookie('login_user', $CustomerID, time() + 99999, "/");

         header("Location: Index.php");
		  exit();

      } else {
        echo 'Your Login Name or Password is invalid';
      }
	 }
   }

?>