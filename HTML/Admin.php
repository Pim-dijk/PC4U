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
		
		<form class="center-block myForm needs-validation" name="AddProduct" action="AddProduct.php" method="POST" enctype="multipart/form-data">
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
			
			<div class="form-group col-sm-9 col-xs-9">
				<label for="Category">Categorie</label><br>
				<select onchange="val()"  name="Category" id="Category" class="form-control">
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
				<input type="file" id="upload_file" name="upload_file[]" multiple>
				<p class="help-block">Selecteer hier de afbeeldingen voor bij het product</p>
		 	</div>

			<div id="1">
				<label for="Property1Processor">Snelheid</label>
				<input class="form-control" type="text" id="Property1Processor" name="Property1Processor" placeholder="Snelheid">

				<label for="Property2Processor">Boxed</label>
				<input class="form-control" type="text" id="Property2Processor" name="Property2Processor" placeholder="Boxed">
			 </div>
			
			 <div id="2">
				<label for="Property1Harddisk">Capaciteit</label>
				<input class="form-control" type="text" id="Property1Harddisk" name="Property1Harddisk" placeholder="Capaciteit">
				
				<label for="Property2Harddisk">Snelheid</label>
				<input class="form-control" type="text" id="Property2Harddisk" name="Property2Harddisk" placeholder="Snelheid">
			 </div>

			 <div id="3">
			 	<label for="Property1Housing">Formfactor</label>
				<input class="form-control" type="text" id="Property1Housing" name="Property1Housing" placeholder="Merk">

				<label for="Property2Housing">Met voeding</label>
				<input class="form-control" type="text" id="Property2Housing" name="Property2Housing" placeholder="Type">
			 </div>

			 <div id="4">
			 	<label for="Property1Laptop">CPU</label>
				<input class="form-control" type="text" id="Property1Laptop" name="Property1Laptop" placeholder="Merk">

				<label for="Property2Laptop">Size</label>
				<input class="form-control" type="text" id="Property2Laptop" name="Property2Laptop" placeholder="Processor serie">
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

    	d = document.getElementById("Category").value;

    	document.getElementById(d).style.display = "block";
	}
</script>

<!--/End Content-->

<?php include 'Footer.php' ?>