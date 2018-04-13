<?php
class RMA extends DatabaseObject {
    protected static $table_name = "rma";
    protected static $db_fields =array('id', 'CustomerID', 'OrderID', 'ProductID', 'Oorzaak', 'Status');

    public $id;
    public $RmaID;
    public $CustomerID;
    public $OrderID;
    public $ProductID;
    public $Oorzaak;
    public $Status;
    
function __construct() {
        parent::__construct("RmaID");
    }

}

$rma = new RMA();
?>

    