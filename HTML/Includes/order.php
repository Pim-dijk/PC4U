<?php
class Orders extends DatabaseObject {
    protected static $table_name = "orders";
    protected static $db_fields = array('OrderID', 'CustomerID', 'OrderDate', 'Status');

    public $id;
    public $OrderID;
    public $CustomerID;
    public $OrderDate;
    public $Status;

    function __construct() {
        parent::__construct("OrderID");
    }


}
$Orders = new Orders();
    