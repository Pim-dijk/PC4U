<?php
class Product extends DatabaseObject {
    protected static $table_name = "products";
    protected static $db_fields =array('ProductID', 'CategoryID', 'ArtNumber', 'ArtName', 'Description', 'Price' , 'Availability', 'Brand', 'Property1', 'Property2');
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

    //common database methods zitten in de database_object

    public
    function update() {
        global $database;

        $attributes = $this->sanitized_attributes();
        $attributes_pairs =  array();
        foreach($attributes as $key => $value){
            $attributes_pairs[] = "{$key}='{$value}'";
        }

        $sql = "UPDATE ".static::$table_name." SET ";
        $sql .= join(", ", $attributes_pairs);
        $sql .= " WHERE `ProductID`=". $database->escape_value($this->ProductID);
        $database->query($sql);
        return($database->affected_rows($sql) == 1) ? true : false;
    }

}

$product = new Product();

?>