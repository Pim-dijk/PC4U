<!--Include Header-->
<?php include 'Header.php'; ?>

<!--Page content goes here!!!-->
<div id="Register" class="content">

	<div class="row">
		<h3>Reparatie Formulier</h3>

		<!--Login Form-->
		<form class="myForm center-block needs-validation">
			<div class="form-group required">
				<label for="product" class="control-label">Product</label>
				<input type="product" class="form-control" id="Email" placeholder="Product" required>
			</div>
			<div class="form-group ">
				<label for="Artikelnummer" class="control-label">Artikelnummer</label>
				<input type="Artikelnummer" class="form-control" id="artikelnummer" placeholder="Artikelnummer">
			</div>
			<div class="form-group required">
				<label for="Oorzaak" class="control-label">Oorzaak</label>
				<textarea type="text" class="form-control textAreaInput" id="Oorzaak" placeholder="Oorzaak" required></textarea>
			</div>
			<button type="submit" class="btn btn-default">Verzend</button>
		</form>
	</div>

</div>

<!--Include Footer-->
<?php include 'Footer.php'; ?>