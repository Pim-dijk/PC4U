<?php
$page = "customer";
include 'Header.php';

if(isset($_GET['id']))
{
    $customerID = $_GET['id'];
    $query = "SELECT * FROM customers WHERE CustomerID = $customerID";

    $result = $customer->find_by_sql($query);
    $customer = $result[0];
}

?>

<!--Content goes here-->
<div id="Customer" class="content">
	
	<!--Customer Data-->
	<div id="Data" class="row">
		
		<div class="col-sm-12 center-block">
			<h1>Klant pagina</h1>
			<hr>
			<h2>Gegevens</h2>
			<hr>
			
			<form class="form-inline needs-validation" method="POST" action="updateCustomer.php" enctype="multipart/form-data">
                <input type="hidden" id="CustomerID" name="CustomerID" value="<?php echo $customer->CustomerID ?>">
				<div class="form-group required">
					<label class="sr-only" for="Email" class="control-label">Email address</label>
					<input type="email" class="form-control" id="Email" name="Email" placeholder="Email"
                           value="<?php echo $customer->Email ?>" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Initials" class="control-label">Voorletter</label>
					<input type="text" class="form-control" id="Initials" name="Initials" placeholder="Voorletter"
                           value="<?php echo $customer->Initials ?>" required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="Prefix">Tussenvoegsel</label>
					<input type="text" class="form-control" id="Prefix" name="Prefix" placeholder="Tussenvoegsel"
                           value="<?php echo $customer->Prefix ?>">
				</div>
				<div class="form-group required">
					<label class="sr-only" for="LastName" class="control-label">Achternaam</label>
					<input type="text" class="form-control" id="LastName" name="Lastname" placeholder="Achternaam"
                           value="<?php echo $customer->Lastname ?>" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Street" class="control-label">Straatnaam</label>
					<input type="text" class="form-control" id="Street" name="Street" placeholder="Straatnaam"
                           value="<?php echo $customer->Street ?>"required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="HouseNumber" class="control-label">Huisnummer</label>
					<input type="text" class="form-control" id="HouseNumber" name="HouseNumber" placeholder="Huisnummer"
                           value="<?php echo $customer->HouseNumber ?>"required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="Addition">Toevoeging</label>
					<input type="text" class="form-control" id="Addition" name="Addition" placeholder="Toevoeging"
                           value="<?php echo $customer->Addition ?>">
				</div>
				<div class="form-group required">
					<label class="sr-only" for="City" class="control-label">Plaats</label>
					<input type="text" class="form-control" id="City" name="City" placeholder="Plaats"
                           value="<?php echo $customer->City ?>" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Zipcode" class="control-label">Postcode</label>
					<input type="text" class="form-control" id="Zipcode" name="Zipcode" placeholder="Postcode"
                           value="<?php echo $customer->Zipcode ?>" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Country" class="control-label">Land</label>
					<input type="text" class="form-control" id="Country" name="Country" placeholder="Land"
                           value="<?php echo $customer->Country ?>" required>
				</div>
				<div class="form-group required">
					<label class="sr-only" for="Phone" class="control-label">Telefoonnummer</label>
					<input type="number" class="form-control" id="Phone" name="PhoneNumber" placeholder="Telefoonnummer"
                           value="<?php echo $customer->PhoneNumber ?>" required>
				</div>
                <div class="form-group required">
                    <label class="sr-only" for="DOB" class="control-label">Telefoonnummer</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Geboortedatum"
                           value="<?php echo $customer->DOB ?>" required>
                </div>
				<button type="submit" class="btn btn-default" id="sumbit" name="submit" >Opslaan</button>
			</form>
			
		</div>
		
	<!--/Customer Data-->
	</div>
	
	
		
	<!--Orders-->
	<h2 class="text-center">Bestellingen</h2>
	<hr>	

<!--Get customers orders-->
<?php
$id = $customer->CustomerID;
$query = "SELECT * FROM orders WHERE CustomerID = $id";
$orders = $order->find_by_sql($query);

?>
    <div id="card" class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Ordernummer</th>
                <th>Besteldatum</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $SessionOrders = array();
            if(!empty($orders))
            {
                foreach($orders as $order)
                {
                ?>
                <tr>
                    <td data-label="Ordernummer"><?=$order->OrderID?></td>
                    <td data-label="Besteldatum"><?=$order->OrderDate?></td>
                    <td data-label="Status"><a href="OrderHistory.php?id=<?=$order->OrderID?>"><?=$order->Status?></a></td>
                    <?php array_push($SessionOrders, serialize($order)); ?>
                </tr>
                <?php
                }
                $_SESSION['orderHistory'] = $SessionOrders;
            }
            ?>
            </tbody>
        </table>
        <!--/Responsive Table-->
    </div>
    <!--/Orders-->


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

<?php include 'Footer.php' ?>