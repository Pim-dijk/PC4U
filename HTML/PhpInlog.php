<?php
session_start();
include("Includes/initialize.php");
  
   if(isset($_POST["submit"]))
   {
       if(isset($_POST['email'])&&isset($_POST['password']))
       {
           // username and password sent from form

           $myemail = ($_POST['email']);
           $mypassword = ($_POST['password']);

           $salted = "8723687hdwuyu2ygeou".$_POST['password']."78t127438crb78oet8";
           $hashed = hash("sha512", $salted);

           if(isset($_POST['admin']))
           {
               $sql = "SELECT * FROM admins WHERE Email = '$myemail' AND Password = '$hashed'";
               $result = $admin->find_by_sql($sql);
               if(isset($result[0]))
               {
                   $admin = $result[0];
                   $AdminID = $admin->AdminID;
               }
           }
           else
           {
               $sql = "SELECT * FROM customers WHERE email = '$myemail' AND password = '$hashed'";
               $customer = new Customer();
               $result = $customer->find_by_sql($sql);
               if(isset($result[0]))
               {
                   $customer = $result[0];
                   $CustomerID = $customer->CustomerID;
               }
           }

           // If result matched $myemail and $mypassword, table row must be 1 row

           if($CustomerID != NULL || $CustomerID != ""){
               setcookie('login_user', $CustomerID, time() + 99999, "/");

               $_SESSION["alert-type"] = "success";
               $_SESSION['alert-message'] = "Welcome back " .$customer->Email ;

               header("Location: Index.php");
               exit();
           }
           else if($AdminID != NULL || $AdminID != ""){
               setcookie('login_admin', $AdminID, time() + 99999, "/");

               $_SESSION["alert-type"] = "success";
               $_SESSION['alert-message'] = "Welcome back " .$admin->Email ;

               header("Location: Index.php");
               exit();
           }
           else {

               $_SESSION["alert-type"] = "error";
               $_SESSION['alert-message'] = "Username and password do not match with our database!";
               header("Location: Login.php");
               exit();
           }
       }
   }

?>