<!--Include Header-->
<?php include 'Header.php'; ?>

<!--Page content goes here!!!-->
<div id="Login" class="row">

	<div class="col-xs-12">
		<h3>Login</h3>

		<!--Login Form-->
		<form class="center-block myForm needs-validation">
			<div class="form-group">
				<label for="Email">Email address</label>
				<input type="email" class="form-control" id="Email" placeholder="Email" required>
			</div>
			<div class="form-group">
				<label for="Password">Password</label>
				<input type="password" class="form-control" id="Password" placeholder="Password" required>
			</div>
			
			<div>
				<p>Nog geen account? <a href="Register.php" class="Link">registreer</a></p>
			</div>
			<div>
				<p>Wachtwoord vergeten? klik <a href="ResetPassword.php" class="Link">hier</a></p>
			</div>

			<button type="submit" class="btn btn-default">Login</button>
		</form>
	</div>

</div>

<!--Include Footer-->
<?php include 'Footer.php'; ?>