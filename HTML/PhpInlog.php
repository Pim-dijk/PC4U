<?php
include("Includes/database.php");
  session_start();
  
   if(isset($_POST["submit"])) {   
      if(isset($_POST['email'])&&isset($_POST['password']))
	  {
		  // username and password sent from form 
      
      $myemail = mysql_real_escape_string($_POST['email']);
      $mypassword = mysql_real_escape_string($_POST['password']); 
      
      $sql = "SELECT * FROM accountgegevens WHERE email= '$myemail' AND wachtwoord= '$mypassword'";
      $result = $database->query($sql);
      $row = $result->num_rows;
      $active = $row['active'];
      
      
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($row >= 1) {
         
         setcookie('login_user', $myemail, time() + 99999, "/");
		 echo $_COOKIE['login_user'];
         
         header("Location: home.php");
		  exit();
      } else {
        echo 'Your Login Name or Password is invalid';
      }
	 }
   }

?>