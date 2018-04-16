<?php
class Discount extends DatabaseObject {
    protected static $table_name = "discounts";
    protected static $db_fields =array('DiscountId', 'ProductID', 'NewPrice', 'FromDate', 'ExpirationDate');

    public $id;
    public $DiscountID;
    public $ProductID;
    public $NewPrice;
    public $FromDate;
    public $ExpirationDate;
    function __construct() {
        parent::__construct("DiscountID");
    }

    //common database methods zitten in de database_object

}

$discount = new Discount();

?>