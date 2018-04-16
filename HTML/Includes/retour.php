<?php
class Retour extends DatabaseObject {
    protected static $table_name = "retourneren";
    protected static $db_fields =array('id', 'CustomerID', 'OrderID', 'ProductID', 'Amount', 'Reason', 'Message', 'Status');

    public $id;
    public $ReparatiesID;
    public $CustomerID;
    public $OrderID;
    public $ProductID;
    public $Amount;
    public $Reason;
    public $Message;
    public $Status;
    
function __construct() {
        parent::__construct("id");
    }

}

$retour = new Retour();
?>

    