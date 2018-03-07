<?php include 'Header.php'?>

<!--Content goes here-->
<div id="Customer" class="content">
	
	<!--Customer Data-->
	<div id="Data" class="row">
		
		<div class="col-sm-12 center-block">
			<h1 class="text-center">Klant pagina</h1>
			<hr>
			<h2 class="text-center">Gegevens</h2>
			<hr>
			
			<form class="form-inline needs-validation">
				<div class="form-group required">
					<label class="sr-only" for="Email" class="control-label">Email address</label>
					<input type="email" class="form-control" id="Email" placeholder="Email" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Password" class="control-label">Wachtwoord</label>
					<input type="password" class="form-control" id="Password" placeholder="Wachtwoord" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="ConfirmPassword" class="control-label">Herhaal wachtwoord</label>
					<input type="password" class="form-control" id="ConfirmPassword" placeholder="Herhaal wachtwoord" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="FirstLetter" class="control-label">Voorletter</label>
					<input type="text" class="form-control" id="FirstLetter" placeholder="Voorletter" required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="Prefix">Tussenvoegsel</label>
					<input type="text" class="form-control" id="Prefix" placeholder="Prefix">
				</div>
				<div class="form-group required">
					<label class="sr-only" for="LastName" class="control-label">Achternaam</label>
					<input type="text" class="form-control" id="LastName" placeholder="Achternaam" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Street" class="control-label">Straatnaam</label>
					<input type="text" class="form-control" id="Street" placeholder="Straatnaam" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="HouseNumber" class="control-label">Huisnummer</label>
					<input type="text" class="form-control" id="HouseNumber" placeholder="Huisnummer" required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="Additive">Toevoeging</label>
					<input type="text" class="form-control" id="Additive" placeholder="Toevoeging">
				</div>
				<div class="form-group required">
					<label class="sr-only" for="City" class="control-label">Plaats</label>
					<input type="text" class="form-control" id="City" placeholder="Plaats" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Zipcode" class="control-label">Postcode</label>
					<input type="text" class="form-control" id="Zipcode" placeholder="Postcode" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Country" class="control-label">Land</label>
					<input type="text" class="form-control" id="Country" placeholder="Land" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Phone" class="control-label">Telefoonnummer</label>
					<input type="number" class="form-control" id="Phone" placeholder="Telefoonnummer" required>
				</div>
				<button type="submit" class="btn btn-default">Opslaan</button>
			</form>
			
		</div>
		
	<!--/Customer Data-->
	</div>
	
	
		
	<!--Orders-->
	<div id="Orders" class="row">
	
	<h2 class="text-center">Bestellingen</h2>
	<hr>	
		
	<div id="card" class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Bestel datum</th>
				<th>Artikel(en)</th>
				<th>Totaalprijs</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-label="Bestel datum">01-01-2018</td>
				<td data-label="Artikel(en)"><a href="#">Artikel omschrijving</a></td>
				<td data-label="Totaalprijs">123.-</td>
				<td data-label="Status"><a href="OrderHistory.php">In behandeling</a></td>
			</tr>
			<tr>
				<td data-label="Bestel datum">01-01-2018</td>
				<td data-label="Artikel(en)"><a href="#">Artikel omschrijving</a></td>
				<td data-label="Totaalprijs">234.-</td>
				<td data-label="Status"><a href="OrderHistory.php">Wacht op betaling</a></td>
			</tr>
			<tr>
				<td data-label="Bestel datum">01-01-2018</td>
				<td data-label="Artikel(en)"><a href="#">Artikel omschrijving</a></td>
				<td data-label="Totaalprijs">345.-</td>
				<td data-label="Status"><a href="OrderHistory.php">Geleverd</a></td>
			</tr>
		</tbody>
	</table>
	<!--/Responsive Table-->
	</div>
	<!--/Orders-->
	</div>
	
	
	
	<div id="Services" class="row">
		
		<h2 class="text-center">Services</h2>
		<hr>
		
		<div>
			<h3><a href="#">Reparatie</a></h3>
			<h3><a href="#">Retouren</a></h3>
			<h3><a href="#">RMA</a></h3>
		</div>
	</div>
	
</div>
<!--End of Content-->

<?php include 'Footer.php'?>