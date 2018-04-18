<?php
include 'Header.php';

if (isset($_SESSION['orderHistory']))
{
    $orders = $_SESSION['orderHistory'];
?>
<div id="Customer" class="content col-lg-12">
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

            foreach ($orders as $order)
            {
                $order = unserialize($order);
                if (!empty($order))
                {
                    ?>
                    <tr>
                        <td data-label="Ordernummer"><?= $order->OrderID ?></td>
                        <td data-label="Besteldatum"><?= $order->OrderDate ?></td>
                        <td data-label="Status">
                            <a href="OrderHistory.php?id=<?= $order->OrderID ?>"><?= $order->Status ?></a>
                        </td>
                    </tr>
                <?php
                }
            }
            ?>
            </tbody>
        </table>
        <!--/Responsive Table-->

    </div>
</div>
<?php
}
include 'footer.php';
?>