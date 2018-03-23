<?php include 'Header.php' ?>

<?php
	$query = "SELECT * FROM categories";
	$categories = $database->query($query);
?>


<!--Content-->

<div id="Admin" class="content">
	<h1>Admin Panel</h1>
	<hr>
	
	<div id="AddDiscount" class="row">
		<h3>Aanbieding aanmaken</h3>

		<!--Aanbieding Form-->
		<form class="center-block myForm needs-validation">
			<div class="form-group col-sm-4 col-xs-12">
				<label for="ArtNr">Artikelnaam/nummer</label>
				<input type="text" class="form-control" id="ArtNr" placeholder="ArtNr/ArtName" required>
			</div>
			<div class="form-group col-sm-4 col-xs-12">
				<label for="Discount">Korting %</label>
				<input type="number" class="form-control" id="Discount" placeholder="Korting %" required>
			</div>
			<div class="form-group col-sm-4 col-xs-12">
				<label for="Expire">Vervaldatum</label>
				<input type="date" class="form-control" id="Expire" placeholder="Vervaldatum" required>
			</div>
			
			<button type="submit" class="btn btn-default">Aanmaken</button>
		</form>
	<!--/Aanbieding aanmaken-->
	</div>
	
	<hr>
	
	<div id="AddProduct" class="row">
		<h3>Product toevoegen</h3>
		
		<form class="center-block myForm needs-validation" name="AddProduct" action="AddProduct.php">
			<div class="form-group col-sm-4 col-xs-12">
				<label for="ArtNr">Artikelnummer</label>
				<input type="text" class="form-control" id="ArtNr" name="Artnr" placeholder="ArtikelNummer" required>
			</div>
			<div class="form-group col-sm-8 col-xs-12">
				<label for="ArtName">Artikelnaam</label>
				<input type="text" class="form-control" id="ArtName" name="Artname" placeholder="Artikelnaam" required>
			</div>
			<div class="form-group col-sm-3 col-xs-12">
				<label for="Price">Prijs</label>
				<input type="number" class="form-control" id="Price" name="Price" placeholder="Prijs" required>
			</div>
			
			<div class="form-group">
				<label for="Category">Categorie</label><br>
				<select onchange="val()"  name="Category" id="Category">
					<?php
						while ($row = $categories->fetch_assoc()) {
							echo '<option value="'.$row['CategoryID'].'">'.$row['Category'].'</option>';
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="Description">Beschrijving</label>
				<textarea type="text" class="form-control textAreaInput" id="Description" name="Description" placeholder="Beschrijving" required></textarea>
			</div>
			<div class="form-group">
				<label for="ImageInput">Afbeelding(en) toevoegen</label>
				<input type="file" id="ImageInput" >
				<p class="help-block">Selecteer hier de afbeeldingen voor bij het product</p>
		 	</div>

			<div id="1">
				<label for="Property1">Snelheid</label>
				<input class="form-control" type="text" id="Property1" name="Property1" placeholder="Snelheid">

				<label for="Property2">Boxed</label>
				<input class="form-control" type="text" id="Property2" name="Property2" placeholder="Boxed">
			 </div>
			
			 <div id="2">
				<label for="Property1">Capaciteit</label>
				<input class="form-control" type="text" id="Property1" name="Property1" placeholder="Capaciteit">
				
				<label for="Property2">Snelheid</label>
				<input class="form-control" type="text" id="Property2" name="Property2" placeholder="Snelheid">
			 </div>

			 <div id="3">
			 	<label for="Property1">Formfactor</label>
				<input class="form-control" type="text" id="Property1" name="Property1" placeholder="Merk">

				<label for="Property2">Met voeding</label>
				<input class="form-control" type="text" id="Property2" name="Property2" placeholder="Type">
			 </div>

			 <div id="4">
			 	<label for="Property1">CPU</label>
				<input class="form-control" type="text" id="Property1" name="Property1" placeholder="Merk">

				<label for="Property2">Size</label>
				<input class="form-control" type="text" id="Property2" name="Property2" placeholder="Processor serie">
			 </div>
			
			<button type="submit" class="btn btn-default">Toevoegen</button>
		</form>
	<!--/Add product-->
	</div>
	
	<div id="AdminServices" class="row">
		
		<h2 class="text-center">Services</h2>
		<hr>
		
		<div>
			<h3 class="Services"><a href="#">Reparatie</a></h3>
			<h3 class="Services"><a href="#">Retouren</a></h3>
			<h3 class="Services"><a href="#">RMA</a></h3>
		</div>
	<!--/Admin Services-->
	</div>
	
</div>

<script> 
	hideAll();
	displayFirst();

	function displayFirst() {
		document.getElementById('1').style.display = "block";
	}

	function hideAll() {
		document.getElementById('1').style.display = "none";
		document.getElementById('2').style.display = "none";
		document.getElementById('3').style.display = "none";
		document.getElementById('4').style.display = "none";
	}

	function val() {
		hideAll();

    	d = document.getElementById("category").value;

		console.log(d);

    	document.getElementById(d).style.display = "block";
	}
</script>

<!--/End Content-->

<?php include 'Footer.php' ?>