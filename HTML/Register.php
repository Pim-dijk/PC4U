<!--Include Header-->
<?php include 'Header.php'; ?>

<!--Page content goes here!!!-->
<div id="Register" class="content">

	<div class="row">
		<h3>Registreer</h3>

		<!--Login Form-->
		<form class="myForm center-block needs-validation">
			<div class="form-group required">
				<label for="Email" class="control-label">Email address</label>
				<input type="email" class="form-control" id="Email" placeholder="Email" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Password" class="control-label">Wachtwoord</label>
				<input type="password" class="form-control" id="Password" placeholder="Wachtwoord" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="ConfirmPassword" class="control-label">Herhaal wachtwoord</label>
				<input type="password" class="form-control" id="ConfirmPassword" placeholder="Herhaal wachtwoord" required>
			</div>
			<div class="form-group required col-lg-2 col-sm-6 col-xs-12">
				<label for="FirstLetter" class="control-label">Voorletter</label>
				<input type="text" class="form-control" id="FirstLetter" placeholder="Voorletter" required>
			</div>
			<div class="form-group col-lg-3 col-sm-6 col-xs-12">
				<label for="Prefix">Tussenvoegsel</label>
				<input type="text" class="form-control" id="Prefix" placeholder="Tussenvoegsel">
			</div>
			<div class="form-group required col-lg-7 col-sm-12">
				<label for="LastName" class="control-label">Achternaam</label>
				<input type="text" class="form-control" id="LastName" placeholder="Achternaam" required>
			</div>
			<div class="form-group required col-lg-6 col-sm-12">
				<label for="Street" class="control-label">Straatnaam</label>
				<input type="text" class="form-control" id="Street" placeholder="Straatnaam" required>
			</div>
			<div class="form-group required col-lg-3 col-sm-6 col-xs-12">
				<label for="HouseNumber" class="control-label">Huisnummer</label>
				<input type="text" class="form-control" id="HouseNumber" placeholder="Huisnummer" required>
			</div>
			<div class="form-group col-lg-3 col-sm-6 col-xs-12">
				<label for="Additive">Toevoeging</label>
				<input type="text" class="form-control" id="Additive" placeholder="Toevoeging">
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="City" class="control-label">Plaats</label>
				<input type="text" class="form-control" id="City" placeholder="Plaats" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Zipcode" class="control-label">Postcode</label>
				<input type="text" class="form-control" id="Zipcode" placeholder="Postcode" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Phone" class="control-label">Telefoonnummer</label>
				<input type="text" class="form-control" id="Phone" placeholder="Telefoonnummer" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Country" class="control-label">Land</label>
				<select id="CountryList" class="form-control" name="CountryList" form="form">
					<option value="NL">Nederland</option>
					<option value="BE">Belgie</option>
					<option value="DE">Duitsland</option>
				</select>
			</div>
			
			<button type="submit" class="btn btn-default col-sm-2 pull-left">Registreer</button>
		</form>
	</div>

</div>

<!--Include Footer-->
<?php include 'Footer.php'; ?>