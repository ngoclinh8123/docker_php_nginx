<?php
require "app/models/PostModel.php";
require "config/database.php";

class HomeController {
    private $conn;

    // function __construct() {
    //     $db= new Db();
    //     $this->conn = $db->connect();
    // }

    public function index() {
        // $postModel = new PostModel($this->conn);
        // $posts = $postModel->getAllPosts();

        include_once 'app/views/home/index.php';
    }


    // public function __destruct() {
    //     // Đóng kết nối đến cơ sở dữ liệu
    //     $this->conn->close();
    // }
}