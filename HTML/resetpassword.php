<?php 
include("Header.php");
?>
<div class="content">

<form  action="reset.php" method="POST" class="myForm center-block needs-validation">
			<div class="form-group required">
				<label for="email" class="control-label">Email address</label>
				<input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Password" class="control-label">New Password</label>
				<input type="password" name="password" class="form-control" id="Password" placeholder="Wachtwoord" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Password" class="control-label">Confirm Password</label>
				<input type="password" name="confirmpassword" class="form-control" id="Password" placeholder="Wachtwoord" required>
			</div>
			<input type="hidden" name="q" 
			  value="<?php
		      if (isset($_GET["q"])) {
			   echo $_GET["q"];
		       }?>" /><input type="submit" name="ResetPasswordForm" value=" Reset Password " />
				
</form>
</div>

<?php include("Footer.php") ?>
