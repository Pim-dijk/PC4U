<?php
class Image extends DatabaseObject {
    protected static $table_name = "images";
    protected static $db_fields =array('ImageID', 'ProductID', 'Location', 'Featured');
    public $ImageID;
    public $ProductID;
    public $Location;
    public $Featured;

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
        $sql .= " WHERE `ImageID`=". $database->escape_value($this->ImageID);
        $database->query($sql);
        return($database->affected_rows($sql) == 1) ? true : false;
    }
}

$image = new Image();

?>