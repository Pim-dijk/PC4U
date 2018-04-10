<?php

class Admin extends DatabaseObject{
    protected static $table_name = "admins";
	protected static $db_fields = array('AdminID', 'Email', 'Password');
	public $id;
	public $AdminID;
	public $Email;
	public $Password;

    function __construct() {
        parent::__construct("AdminID");
    }

}

$admin = new Admin();