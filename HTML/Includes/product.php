<?php
class Product extends DatabaseObject {
    protected static $table_name = "products";
    protected static $db_fields = array('ProductID', 'CategoryID', 'ArtNumber', 'ArtName', 'Description', 'Price' , 'Availability', 'Brand', 'Property1', 'Property2');
    
    public $id; //Just a placeholder for the database object functions
    public $ProductID;
    public $CategoryID;
    public $ArtNumber;
    public $ArtName;
    public $Description;
    public $Price;
    public $Availability;
    public $Brand;
    public $Property1;
    public $Property2;

    function __construct() {
        parent::__construct("ProductID");
    }

    //common database methods zitten in de database_object


}

$product = new Product();

?>