<?php

class Customer extends DatabaseObject {

	protected static $table_name = "customers";
	protected static $db_fields = array('CustomerID', 'Email', 'Password', 'PhoneNumber', 'Street', 'Zipcode', 'HouseNumber', 'Addition', 'City', 'Country', 'Initials', 'Prefix', 'Lastname', 'DOB');
	public $id;
	public $CustomerID = "";
	public $Email = "";
	public $Password = "";
	public $PhoneNumber = "";
	public $Street = "";
	public $Zipcode = "";
	public $HouseNumber = "";
	public $Addition = "";
	public $City = "";
	public $Country = "";
	public $Business = "";
	public $Initials = "";
	public $Prefix = "";
	public $Lastname = "";
	public $DOB = "";

    function __construct() {
        parent::__construct("CustomerID");
    }

	public
	function full_name() {
		if ( isset( $this->first_name ) && isset( $this->last_name ) ) {
			return $this->first_name . " " . $this->last_name;
		} else {
			return "";
		}
	}

	public static
	function authenticate( $username = "", $password = "" ) {
		global $database;

		$username = $database->escape_value( $username );
		$password = $database->escape_value( $password );

		$sql = "SELECT * FROM `users` ";
		$sql .= "WHERE `username`= '{$username}' ";
		$sql .= "AND `password` = '{$password}' ";
		$sql .= "LIMIT 1";


		$result_array = self::find_by_sql( $sql );
		return !empty( $result_array ) ? array_shift( $result_array ) : false;

	}

    public
    function update() {
        global $database;

        $attributes = $this->sanitized_attributes();
        $attributes_pairs =  array();
        foreach($attributes as $key => $value){
            if($key != "Password")
            {
                $attributes_pairs[] = "{$key}='{$value}'";
            }
        }

        $sql = "UPDATE ".static::$table_name." SET ";
        $sql .= join(", ", $attributes_pairs);
        $sql .= " WHERE CustomerID =". $database->escape_value($this->id);
        $database->query($sql);
        return($database->affected_rows($sql) == 1) ? true : false;
    }

	//common database methods zitten in de database_object
	
}

$customer = new Customer();
?>