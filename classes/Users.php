<?php
require_once 'constants/database.php';
require_once 'inc/adodb/adodb.inc.php'; // Adjust the path as necessary for the ADOdb library

class Users {
    private $db;

    private $table_name;

    public function __construct($debug = false)
    {
        $this->db = NewADOConnection('mysqli'); # eg. 'mysqli' or 'oci8'
        $this->db->debug = $debug;
        $this->db->Connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->table_name = 'users';
    }

    public function validateCredentials($username, $password) {

        $query = "SELECT password FROM $this->table_name WHERE username = '$username'";
        $result = $this->db->Execute($query);

        if ($result && $result->RecordCount() > 0) {
            $hashedPassword = $result->fields['password'];
            if (password_verify($password, $hashedPassword)) {
                return true;
            }
        }
        return false;
    }
}
