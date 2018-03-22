<?php
class Product extends DatabaseObject {
    protected static $table_name = "products";
    protected static $db_fields =array('ProductID', 'CategoryID', 'ArtNumber', 'ArtName', 'Description', 'Price' , 'Availability');
    public $ProductID;
    public $CategoryID;
    public $ArtNumber;
    public $ArtName;
    public $Description;
    public $Price;
    public $Availability;

    //common database methods zitten in de database_object

}

$product = new Product();

?>