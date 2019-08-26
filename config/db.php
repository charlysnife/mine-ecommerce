<?php
class DB {
    private $host;
    private $db_name;
    private $db_user;
    private $db_pass;

    public $db;

    public function __construct($host, $db_name, $db_user, $db_pass) 
    {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    public function connect() {
        $this->db = new mysqli($this->host, $this->db_user, $this->db_pass, $this->db_name);

        if($this->db->connect_errno) {
            return 'Connection failed' . $this->db->connect_error;
        }else {
            return true;
        }
    }
}

?>