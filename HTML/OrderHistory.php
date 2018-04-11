<?php include 'Header.php';

//Get the correct order from the session and unserialize it
if (isset($_SESSION['orderHistory'])) {
    $orders = $_SESSION['orderHistory'];
    foreach ($orders as $order) {
        $order = unserialize($order);
        if ($order->OrderID == $_GET['id']) {
            //Store the order object in thisOrder
            $thisOrder = $order;
            //Get all the orderdetails belonging to the order
            $sql = "SELECT p.ProductID, p.ArtNumber, p.ArtName, p.Price, o.OrderID, o.Amount, d.NewPrice, d.FromData, d.ExpirationDate
                    FROM products as p 
                    LEFT JOIN orderdetails as o on p.ProductID = o.ProductID 
                    LEFT JOIN discounts as d on p.ProductID = d.ProductID
                    WHERE OrderID = $thisOrder->OrderID";
            $result = $database->query($sql);

            $totalOrders = 0;
            $totalPrice = 0;
            $oldPrice = NULL;

        }
    }
}

?>

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
                <?php
                // Each row is a resultset with all values
                while ($row = $result->fetch_assoc()) {
                    //Check if there is a discounted price
                    if ($row['NewPrice'] != NULL) {
                        if ($order->OrderDate > $row['FromData'] && $order->OrderDate < $row['ExpirationDate']) {
                            $price = $row['NewPrice'];
                            $oldPrice = $row['Price'];
                        }
                    } else {
                        $price = $row['Price'];
                    }
                    $totalOrders += $row['Amount'];
                    $totalPrice += $price * $row['Amount'];
                    ?>
                    <tr>
                        <td data-label="Artikelnummer"><?= $row['ArtNumber'] ?></td>
                        <td data-label="Artikelnaam"><a
                                    href="producten-pagina.php?id=<?= $row['ProductID'] ?>"><?= $row['ArtName'] ?>
                            </a>
                        </td>
                        <td data-label="Aantal"><?= $row['Amount'] ?></td>
                        <td data-label="Prijs p.s."><?= $price . ".-" ?></td>
                        <td data-label="Totaal"><?= $row['Amount'] * $price . ".-" ?></td>
                    </tr>
                    <?php
                    $oldPrice = NULL;
                }
                ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td data-label="Totaal aantal"><?= $totalOrders ?></td>
                    <td>-</td>
                    <td data-label="Totaal"><?= $totalPrice . ".-" ?></td>
                </tr>
                </tbody>
            </table>
            <!--/Card Table		-->
        </div>

        <p>Status: <?= $order->Status ?></p>

        <!--/Order History-->
    </div>

    <!--/End Content-->

<?php include 'Footer.php' ?>