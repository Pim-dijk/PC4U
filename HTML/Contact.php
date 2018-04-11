<!--Include Header-->
<?php include 'Header.php'; ?>

	<!--Page content goes here!!!-->
	<div id="Contact" class="row">
		<div class="col-xs-12">
			
			<h3>Contact</h3>

			<p class="text-center">Via onderstaand formulier kunt u contact met ons opnemen, wij zullen zo snel mogelijk reageren.</p>

			<!--Contact Form-->
			<form class="center-block myForm needs-validation">
			  <div class="form-group required">
				<label for="Name" class="control-label">Name</label>
				<input type="text" class="form-control" id="Name" placeholder="Name" required>
			  </div>
			  <div class="form-group required">
				<label for="Email" class="control-label">Email adres</label>
				<input type="email" class="form-control" id="Email" placeholder="Email adres" required>
			  </div>
			  <div class="form-group">
				<label for="Phone">Telefoonnummer</label>
				<input type="number" class="form-control" id="Phone" placeholder="Telefoonnummer">
			  </div>
			  <div class="form-group required">
				<label for="Message" class="control-label">Bericht</label>
				<textarea type="text" class="form-control" id="Message" placeholder="Bericht..." required></textarea>
			  </div>
			  <button type="submit" class="btn btn-default">Verstuur</button>
			</form>
			
		<!--/Col-xs-12-->
		</div>
	<!--/Contact-->
	</div>
	
<!--Include Footer-->
<?php include 'Footer.php'; ?>