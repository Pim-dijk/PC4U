<?php include 'Header.php' ?>

<!--Content goes here-->
<div id="OrderHistory" class="content">
	
	<h3>Bestellingen overzicht</h3>
	
	<div id="card" class="table-responsive">
	<table class="table table-bordered ">
		<thead>
			<tr>
				<th>Artikelnummer</th>
				<th>Artikelnaam</th>
				<th>Aantal</th>
				<th>Prijs p.s.</th>
				<th>Totaal</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-label="Artikelnummer">13245648</td>
				<td data-label="Artikelnaam"><a href="#">Artikel omschrijving</a></td>
				<td data-label="Aantal">1</td>
				<td data-label="Prijs p.s.">749.-</td>
				<td data-label="Totaal">749.-</td>
			</tr>
			<tr>
				<td data-label="Artikelnummer">654891</td>
				<td data-label="Artikelnaam"><a href="#">Artikel omschrijving</a></td>
				<td data-label="Aantal">4</td>
				<td data-label="Prijs p.s.">15.-</td>
				<td data-label="Totaal">60.-</td>
			</tr>
			<tr>
				<td data-label="Artikelnummer">8778211</td>
				<td data-label="Artikelnaam"><a href="#">Artikel omschrijving</a></td>
				<td data-label="Aantal">1</td>
				<td data-label="Prijs p.s.">159.-</td>
				<td data-label="Totaal">159.-</td>
			</tr>
			<tr>
				<td>-</td>
				<td>-</td>
				<td data-label="Totaal aantal">6</td>
				<td>-</td>
				<td data-label="Totaal">914.-</td>
			</tr>
		</tbody>
	</table>
<!--/Card Table		-->
	</div>
	
	<p>Status: Uitgeleverd</p> 
	
<!--/Order History-->
</div>

<!--/End Content-->

<?php include 'Footer.php' ?>