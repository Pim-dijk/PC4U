<?php
class Category extends DatabaseObject {
    protected static $table_name = "categories";
    protected static $db_fields =array('CategoryID', 'Category', 'Properties');
    public $CategoryID;
    public $Category;
    public $Properties;

    //common database methods zitten in de database_object

}

$category = new Category();

?>