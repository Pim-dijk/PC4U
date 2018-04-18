<!--Include Header-->
<?php include 'Header.php'; ?>

<!--Page content goes here!!!-->
<div id="Register" class="content">

	<div class="row">
		<h3>Product terugsturen</h3>

		<!--Login Form-->
		<form class="myForm center-block needs-validation" method="POST" action="RMA_aanvraag_plaatsen.php">
			<div class="form-group required">
				<label for="Artikelnummer" class="control-label">Artikelnummer</label>
				<input type="Artikelnummer" class="form-control" id="Artikelnummer" name="artNumber" placeholder="Artikelnummer" required>
			</div>
			<div class="form-group required ">
				<label for="Ordernummer" class="control-label">Ordernummer</label>
				<input type="Ordernummer" class="form-control" id="Ordernummer" name="orderNumber" placeholder="Ordernummer" required>
			</div>
			<div class="form-group ">
				<label for="Oorzaak" class="control-label">Oorzaak</label>
				<textarea type="text" class="form-control textAreaInput" id="Oorzaak" name="oorzaak" placeholder="Oorzaak" ></textarea>
			</div>
			<button type="submit" class="btn btn-default">Verzend</button>
		</form>
	</div>

</div>

<!--Include Footer-->
<?php include 'Footer.php'; ?>