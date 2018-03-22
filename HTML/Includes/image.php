<?php
class Image extends DatabaseObject {
    protected static $table_name = "images";
    protected static $db_fields =array('ImageID', 'ProductID', 'Image');
    public $ImageID;
    public $ProductID;
    public $Image;

    //common database methods zitten in de database_object
}

$image = new Image();

?>