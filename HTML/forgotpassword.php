<?php include("Header.php");

?>
<div class="content">

<form  action="changePassword.php" method="POST" class="myForm center-block needs-validation">
			<div class="form-group required">
				<label for="email" class="control-label">Email address</label>
				<input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
			</div>
				<button type="submit" name="forgotpassword" value=" Request Reset" class="btn btn-default col-sm-2 pull-left">Send</button>
</form>
</div>
<?php include("Footer.php") ?>