<?php
class Orderdetails extends DatabaseObject {
    protected static $table_name = "orderdetails";
    protected static $db_fields =array('OrderdetailsID', 'OrderID', 'ProductID', 'Amount');

    public $id;
    public $OrderdetailsID;
    public $OrderID;
    public $ProductID;
    public $Amount;

    function __construct() {
        parent::__construct("OrderdetailsID");
    }
}
$Orderdetails = new Orderdetails();
    