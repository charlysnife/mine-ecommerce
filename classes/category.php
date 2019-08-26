<?php
include_once(dirname(dirname(__FILE__)).'/config/config.php');
include_once(dirname(dirname(__FILE__)).'/config/db.php');

class Category {

    private $db;

    public function __construct()
    {
        $this->db = new DB(DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $this->db->connect();
    }

    public function getCategory() {
        
    }
}
?>