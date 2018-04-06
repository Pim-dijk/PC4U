<?php

class Customer extends DatabaseObject {

	protected static $table_name = "customers";
	protected static $db_fields = array('CustomerID', 'Email', 'Password', 'PhoneNumber', 'Street', 'Zipcode', 'HouseNumber', 'Addition', 'City', 'Country', 'Business', 'Initials', 'Prefix', 'Lastname', 'DOB');
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
        parent::__construct("CustomerID", $this->CustomerID);
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
	function create() {
		global $database;
			$attributes = $this->sanitized_attributes();
			$sql = "INSERT INTO ".static::$table_name." (";
			$sql .= join(", ", array_keys($attributes));
			$sql .= ") VALUES ('";
			$sql .= join("', '", array_values($attributes));
			$sql .= "')";
			if($database->query($sql)){
				$this->CustomerID = $database->insert_id();
				return true;
				
			}else{
				return false;
			}
	}

	//common database methods zitten in de database_object
	
}

$customer = new Customer();
?>