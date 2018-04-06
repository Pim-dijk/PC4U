<?php
class Discount extends DatabaseObject {
    protected static $table_name = "discounts";
    protected static $db_fields =array('ProductID', 'NewPrice', 'ExpirationDate');
    public $id;
    public $ProductID;
    public $NewPrice;
    public $ExpirationDate;
    function __construct() {
        parent::__construct("ProductID");
    }

    //common database methods zitten in de database_object

}

$discount = new Discount();

?>