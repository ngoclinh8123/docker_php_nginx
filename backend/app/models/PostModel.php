<?php

class PostModel {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllPosts() {
        // Lấy danh sách tất cả bài viết từ cơ sở dữ liệu.
        $sql = "select * from posts";
        $result = $this->conn->query($sql);

        $data=array();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $data[] = $row;
            }
        }

        // Giải phóng kết quả truy vấn
        $result->free();
        return $data;
    }

    public function getPostById($postId) {
        // Lấy thông tin của bài viết có ID $postId từ cơ sở dữ liệu.
    }

    public function addPost($title, $content) {
        // Thêm bài viết mới vào cơ sở dữ liệu.
    }

    public function updatePost($postId, $title, $content) {
        // Cập nhật thông tin bài viết có ID $postId trong cơ sở dữ liệu.
    }
}
