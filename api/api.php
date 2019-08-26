<?php
include_once(dirname(dirname(__FILE__)).'/config/config.php');
include_once(dirname(dirname(__FILE__)).'/config/db.php');
class Api {
    private $connect;

    public function __construct()
    {
        $this->connect = new DB(DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $this->connect->connect();
    }

    public function checkCategoryName($name) {
        $query = "SELECT name FROM categories WHERE name = ?";
        $stmt = $this->connect->db->prepare($query);

        $category_name = $name;

        $stmt->bind_param('s', $category_name);
        $stmt->execute();

        $stmt->store_result();
        return $stmt->num_rows;
    }

    public function createCategory($name, $parent_category) {
        $query = "INSERT INTO categories (name, parent_id) VALUES(?, ?)";
        $stmt = $this->connect->db->prepare($query);

        $category_name = $name;
        $parent_id = $parent_category == ''? 0 : $parent_category; // Check if parent_category variable is empty then assign 0 to it

        $stmt->bind_param('si', $category_name, $parent_id);

        $stmt->execute();

        if(!$this->connect->db->connect_errno) {
            $stmt->close();
            return json_encode(['result'=>'success']);
        }else {
            $stmt->close();
            return json_encode(['result'=>'error', 'message'=>'An error occurred']);
        }
    }

    public function getCategory() {
        $query = "SELECT id, name FROM categories WHERE parent_id = ?";
        $stmt = $this->connect->db->prepare($query);

        $parent_id = 0;
        $stmt->bind_param('i', $parent_id);
        $stmt->execute();

        $result = $stmt->get_result();
        $data = [];
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $stmt->close();
        return $data;
    }
}
?>