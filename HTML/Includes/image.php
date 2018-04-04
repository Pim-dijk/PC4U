<?php
class Image extends DatabaseObject {
    protected static $table_name = "images";
    protected static $id = "ProductID";
    protected static $db_fields =array('ImageID', 'ProductID', 'Location');
    public $ImageID;
    public $ProductID;
    public $Location;

    //common database methods zitten in de database_object
}

$image = new Image();

?>