<?php
class Category extends DatabaseObject {
    protected static $table_name = "categories";
    protected static $db_fields =array('CategoryID', 'Category');
    public $CategoryID;
    public $Category;

    //common database methods zitten in de database_object


}

$category = new Category();

?>