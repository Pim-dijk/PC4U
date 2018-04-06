<!--Include Header-->
<?php include 'Header.php';
?>

<!--Page content goes here!!!-->
<div id="Login" class="row content">

	<div class="col-xs-12">
		<h3>Login</h3>

		<!--Login Form-->
		<form class="center-block loginForm needs-validation" action="PhpInlog.php" method="POST">
			<div class="form-group">
				<label for="Email">Email address</label>
				<input type="email" class="form-control" name="email" id="Email" placeholder="Email" required>
			</div>
			<div class="form-group">
				<label for="Password">Password</label>
				<input type="password" class="form-control" name="password" id="Password" placeholder="Password" required>
			</div>
			
			<div>
				<p>Nog geen account? <a href="Register.php" class="Link">registreer</a></p>
			</div>
			<div>
				<p>Wachtwoord vergeten? klik <a href="ResetPassword.php" class="Link">hier</a></p>
			</div>

			<button type="submit" name="submit" class="btn btn-default">Login</button>
		</form>
	</div>

</div>

<!--Include Footer-->
<?php include 'Footer.php'; ?>