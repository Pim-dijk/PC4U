<?php
class Reparatie extends DatabaseObject {
    protected static $table_name = "reparaties";
    protected static $db_fields =array('ReparatieID', 'CustomerID', 'ProductID', 'ProductName', 'Description', 'Status');

    public $id;
    public $ReparatiesID;
    public $CustomerID;
    public $ProductID;
    public $ProductName;
    public $Description;
    public $Status;
    
function __construct() {
        parent::__construct("ReparatiesID");
    }

}

$reparatie = new Reparatie();
?>

    