<?php
//it's going to need the database, then it's
//probably smart to require it before we start.
class DatabaseObject{

    public $tableNameOfID;

    function __construct($tableNameOfID) {
        $this->tableNameOfID = $tableNameOfID;
    }

    //common database methods
    public static function find_all(){
        global $database;
        return static::find_by_sql("SELECT * FROM ".static::$table_name);
    }

    public static function find_by_id($id=0){
        $result_array =static::find_by_sql("SELECT * FROM ".static::$table_name." WHERE id={$id} LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) :false;
    }

    public static function find_by_sql($sql=""){
        global $database;
        $result_set = $database->query($sql);
        $object_array = array();
        while($row = $database->fetch_array($result_set)){
            $object_array[] = static::instantiate($row);
        }
        return $object_array;
    }

    public static function count_all(){
        global $database;
        $sql = "SELECT COUNT(*) FROM " .static::$table_name;
        $result_set = $database->query($sql);
        //het resultaat geeft een getal terug die in een row in de database zit dus daarom
        //moet je hem nog als row uit de array halen voor resultaat
        $row = $database->fetch_array($result_set);
        return array_shift($row);
    }

    private static function instantiate($record){
//could check if record exists and is an array
//simple, longform approach:
        $object = new static;
//$user->id= $record['id'];
//$user->username= $record['username'];
//$user->password= $record['password'];
//$user->first_name= $record['first_name'];
//$user->last_name= $record['last_name'];
//more dynamic, shortform approuch:
        foreach($record as $attribute=> $value){
            if($object->has_attribute($attribute)){
                $object->$attribute = $value;}
        } return $object;

    }

    private function has_attribute($attribute){
        //get_object_vars returns an associative array
        $object_vars = get_object_vars($this);
        return array_key_exists($attribute, $object_vars);}

    protected function attributes(){
        //return an array of attribute names and their values
        $attributes = array();
        foreach(static::$db_fields as $field){
            if(property_exists($this, $field)){
                $attributes[$field] = $this->$field;
            }
        }
        return $attributes;
    }

    protected function sanitized_attributes(){
        global $database;
        $clean_attributes = array();
        //sanitize the values before submitting
        // Note: does not alter the actuel value of each attribute
        foreach($this->attributes() as $key => $value){
            $clean_attributes[$key] =$database->escape_value($value);
        }
        return $clean_attributes;
    }

    public function save(){
        //a new record won't have an id yet.
        return isset($this->id) ? $this->update() : $this->create();
    }

    public
    function create() {
        global $database;

        $attributes = $this->sanitized_attributes();
        $sql = "INSERT INTO ".static::$table_name." (";
        $sql .= join(", ", array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";
        if($database->query($sql)){
            $this->id = $database->insert_id();
            return true;

        }else{
            return false;
        }
    }

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
        $sql .= " WHERE " .$this->tableNameOfID. "=". $database->escape_value($this->id);
        $database->query($sql);
        return($database->affected_rows($sql) == 1) ? true : false;
    }

    public
    function delete() {
        global $database;
        $sql = "DELETE FROM ".static::$table_name." ";
        $sql .= "WHERE id='". $database->escape_value($this->id);
        $sql .= "' LIMIT 1";
        $database->query($sql);
        return ($database->affected_rows($sql) == 1) ? true : false;

    }
}
?>