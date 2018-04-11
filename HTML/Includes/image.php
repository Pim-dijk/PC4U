<?php
class Image extends DatabaseObject {
    protected static $table_name = "images";
    protected static $db_fields = array('ImageID', 'ProductID', 'Location', 'Featured');
    public $id;
    public $ImageID;
    public $ProductID;
    public $Location;
    public $Featured;

    function __construct() {
        parent::__construct("ImageID");
    }

    //common database methods zitten in de database_object

}

$image = new Image();

?>