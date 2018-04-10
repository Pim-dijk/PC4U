<!--Include Header-->
<?php include 'Header.php';
?>


<!--Page content goes here!!!-->
<div id="Register" class="content">

	<div class="row">
		<h3>Registreer</h3>

		<!--Login Form-->
		<form  action="NewUser.php" method="post" class="myForm center-block needs-validation">
			<div class="form-group required">
				<label for="Email" class="control-label">Email address</label>
				<input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Password" class="control-label">Wachtwoord</label>
				<input type="password" name="password" class="form-control" id="Password" placeholder="Wachtwoord" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="ConfirmPassword" class="control-label">Herhaal wachtwoord</label>
				<input type="password" name="confirm_password" class="form-control" id="ConfirmPassword" placeholder="Herhaal wachtwoord" required>
			</div>
			<div class="form-group required col-lg-2 col-sm-6 col-xs-12">
				<label for="FirstLetter" class="control-label">Voorletter</label>
				<input type="text" name="initials" class="form-control" id="FirstLetter" placeholder="Voorletter" required>
			</div>
			<div class="form-group col-lg-3 col-sm-6 col-xs-12">
				<label for="Prefix">Tussenvoegsel</label>
				<input type="text" name="prefix" class="form-control" id="Prefix" placeholder="Tussenvoegsel">
			</div>
			<div class="form-group required col-lg-7 col-sm-12">
				<label for="LastName" class="control-label">Achternaam</label>
				<input type="text" name="lastname" class="form-control" id="LastName" placeholder="Achternaam" required>
			</div>
			<div class="form-group required col-lg-6 col-sm-12">
				<label for="Street" class="control-label">Straatnaam</label>
				<input type="text" name="straat" class="form-control" id="Street" placeholder="Straatnaam" required>
			</div>
			<div class="form-group required col-lg-3 col-sm-6 col-xs-12">
				<label for="HouseNumber" class="control-label">Huisnummer</label>
				<input type="text" name="housenumber" class="form-control" id="HouseNumber" placeholder="Huisnummer" required>
			</div>
			<div class="form-group col-lg-3 col-sm-6 col-xs-12">
				<label for="Additive">Toevoeging</label>
				<input type="text" name="addition" class="form-control" id="Additive" placeholder="Toevoeging">
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="City" class="control-label">Plaats</label>
				<input type="text" name="city" class="form-control" id="City" placeholder="Plaats" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Zipcode" class="control-label">Postcode</label>
				<input type="text" name="zipcode" class="form-control" id="Zipcode" placeholder="Postcode" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Phone" class="control-label">Telefoonnummer</label>
				<input type="text" name="phonenumber" class="form-control" id="Phone" placeholder="Telefoonnummer" required>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Country" class="control-label">Land</label>
                <select name="Country" class="form-control" id="Country">
                    <option value="Nederland">Nederland</option>
                    <option value="Belgie">Belgie</option>
                    <option value="Duitsland">Duitsland</option>
                </select>
			</div>
			<div class="form-group required col-sm-6 col-xs-12">
				<label for="Phone" class="control-label">Geboortedatum</label>
				<input type="date" name="DOB" class="form-control" id="date" placeholder="Geboortedatum" required>
			</div>
            <div class="form-group col-sm-12">
                <label for="Business" class="control-label"> Aanvinken voor zakelijk account</label>
                <input class="pull-left" type="checkbox" name="Business" value="1"><br>
            </div>

			<div class="form-group col-sm-12">
                <button type="submit" name="register" class="btn btn-default pull-left">Registreer</button>
            </div>

		</form>
	</div>

</div>

<!--Include Footer-->
<?php include 'Footer.php'; ?>