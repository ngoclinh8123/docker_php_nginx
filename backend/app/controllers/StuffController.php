<?php
// require "config/database.php";

class StuffController {
    // private $conn;

    // function __construct() {
    //     $db= new Db();
    //     $this->conn = $db->connect();
    // }

    public function index() {
        include_once 'app/views/stuff/index.php';
    }


    // public function __destruct() {
    //     // Đóng kết nối đến cơ sở dữ liệu
    //     $this->conn->close();
    // }
}