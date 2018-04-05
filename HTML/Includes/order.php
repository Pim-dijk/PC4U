<?php
class Orders extends DatabaseObject {
    protected static $table_name = "orders";
    protected static $db_fields = array('OrderID', 'CustomerID', 'OrderDate', 'Status');

    public $OrderID;
    public $CustomerID;
    public $OrderDate;
    public $Status;

$Orders = new Orders();
}

    