<?php
class Category extends DatabaseObject {
    protected static $table_name = "categories";
    protected static $db_fields = array('CategoryID', 'Category', 'Properties', 'Path');
    public $id;
    public $CategoryID;
    public $Category;
    public $Properties;
    public $Path;

    function __construct() {
        parent::__construct("CategoryID", $this->CategoryID);
    }

    //common database methods zitten in de database_object
	public static function find_by_id($id=0){
        $result_array =static::find_by_sql("SELECT * FROM ".static::$table_name." WHERE CategoryID={$id} LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) :false;
    }
	
}

$category = new Category();

?>