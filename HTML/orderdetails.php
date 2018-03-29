<?php
class Orderdetails extends DatabaseObject {
    protected static $table_name = "orderdetails";
    protected static $db_fields =array('OrderdetailsID', 'OrderID', 'ProductID', 'Amount');

    public $OrderdetailsID;
    public $OrderID;
    public $ProductID;
    public $Amount;
    
$Orderdetails = new Orderdetails();
}

    