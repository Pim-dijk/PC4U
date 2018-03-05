<!--Include Header-->
<?php include 'Header.php'; ?>

<!--Page content goes here!!!-->
<div id="Register" class="row">

	<div class="col-xs-12">
		<h3>Registreer</h3>

		<!--Login Form-->
		<form class="myForm center-block needs-validation">
			<div class="form-group required">
				<label for="Email" class="control-label">Email address</label>
				<input type="email" class="form-control" id="Email" placeholder="Email" required>
			</div>
			<div class="form-group required">
				<label for="Password" class="control-label">Wachtwoord</label>
				<input type="password" class="form-control" id="Password" placeholder="Wachtwoord" required>
			</div>
			<div class="form-group required">
				<label for="ConfirmPassword" class="control-label">Herhaal wachtwoord</label>
				<input type="password" class="form-control" id="ConfirmPassword" placeholder="Herhaal wachtwoord" required>
			</div>
			<div class="form-group required">
				<label for="FirstLetter" class="control-label">Voorletter</label>
				<input type="text" class="form-control" id="FirstLetter" placeholder="Voorletter" required>
			</div>
			<div class="form-group">
				<label for="Prefix">Tussenvoegsel</label>
				<input type="text" class="form-control" id="Prefix" placeholder="Prefix">
			</div>
			<div class="form-group required">
				<label for="LastName" class="control-label">Achternaam</label>
				<input type="text" class="form-control" id="LastName" placeholder="Achternaam" required>
			</div>
			<div class="form-group required">
				<label for="Street" class="control-label">Straatnaam</label>
				<input type="text" class="form-control" id="Street" placeholder="Straatnaam" required>
			</div>
			<div class="form-group required">
				<label for="HouseNumber" class="control-label">Huisnummer</label>
				<input type="text" class="form-control" id="HouseNumber" placeholder="Huisnummer" required>
			</div>
			<div class="form-group">
				<label for="Additive">Toevoeging</label>
				<input type="text" class="form-control" id="Additive" placeholder="Toevoeging">
			</div>
			<div class="form-group required">
				<label for="City" class="control-label">Plaats</label>
				<input type="text" class="form-control" id="City" placeholder="Plaats" required>
			</div>
			<div class="form-group required">
				<label for="Zipcode" class="control-label">Postcode</label>
				<input type="text" class="form-control" id="Zipcode" placeholder="Postcode" required>
			</div>
			<div class="form-group required">
				<label for="Country" class="control-label">Land</label>
				<input type="text" class="form-control" id="Country" placeholder="Land" required>
			</div>
			<div class="form-group required">
				<label for="Phone" class="control-label">Telefoonnummer</label>
				<input type="number" class="form-control" id="Phone" placeholder="Telefoonnummer" required>
			</div>
			<button type="submit" class="btn btn-default">Registreer</button>
		</form>
	</div>

</div>

<!--Include Footer-->
<?php include 'Footer.php'; ?>