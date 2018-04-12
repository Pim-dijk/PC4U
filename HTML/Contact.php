<!--Include Header-->
<?php include 'Header.php'; ?>
<?php 
if (isset($_POST["submit"]))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$number = $_POST["number"];
	$messageC = $_POST["message"];
	
	
//if "email" variable is filled out, send email

  
  //Email information
  $admin_email = "zanaabdu@live.nl";
  $subject ="Contactform";
 
	
   $headers = "From: " . $email . " \r\n";
            $headers .= "Reply-To: " . $email . " \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $message = 'Van: ' . $name . '</br></br>';
            $message .= 'Email: ' . $email . '</br></br>';
            $message .= 'Bericht: ' . $messageC . '</br></br>';
            $message .= 'Telefoonnummer: ' . $number . '</br></br>';

            $sent = mail($admin_email, $subject, $message, $headers);
  		if($sent){
			print_r( "BITCHHHHHHHHHHHHHHHHHHH");
			exit();
		}
  //Email response
  echo "Thank you for contacting us!";
	 
  }
  
  //if "email" variable is not filled out, display the form
  else  {


}

?>

	<!--Page content goes here!!!-->
	<div id="Contact" class="row">
		<div class="col-xs-12">
			
			<h3>Contact</h3>

			<p class="text-center">Via onderstaand formulier kunt u contact met ons opnemen, wij zullen zo snel mogelijk reageren.</p>

			<!--Contact Form-->
			<form  action="" class="center-block myForm needs-validation">
			  <div class="form-group required">
				<label for="Name" class="control-label">Name</label>
				<input type="text" name="name" class="form-control" id="Name" placeholder="Name" required>
			  </div>
			  <div class="form-group required">
				<label for="Email" class="control-label">Email adres</label>
				<input type="email" name="email" class="form-control" id="Email" placeholder="Email adres" required>
			  </div>
			  <div class="form-group">
				<label for="Phone">Telefoonnummer</label>
				<input type="number" name="number" class="form-control" id="Phone" placeholder="Telefoonnummer">
			  </div>
			  <div class="form-group required">
				<label for="Message" class="control-label">Bericht</label>
				<textarea type="text" name="message" class="form-control" id="Message" placeholder="Bericht..." required></textarea>
			  </div>
			  <button type="submit" name="submit" class="btn btn-default">Verstuur</button>
			</form>
			
		<!--/Col-xs-12-->
		</div>
	<!--/Contact-->
	</div>
	
<!--Include Footer-->
<?php include 'Footer.php'; ?>