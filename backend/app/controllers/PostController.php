<?php
class PostController {
    public function index() {
        // Gọi Model để lấy danh sách bài viết
        $postModel = new PostModel();
        $posts = $postModel->getAllPosts();
    }

    public function add() {
        // Xử lý thêm bài viết mới vào cơ sở dữ liệu

        // Sau khi thêm thành công, chuyển hướng về trang danh sách bài viết
        header('Location: index.php?controller=post&action=index');
        exit;
    }

    public function edit($postId) {
        // Các xử lý để chỉnh sửa bài viết có ID $postId.
        // Gọi Model để lấy thông tin bài viết có ID $postId
        $postModel = new PostModel();
        $post = $postModel->getPostById($postId);

        // Gọi View để hiển thị form chỉnh sửa bài viết
        include_once 'app/views/post/edit.php';
    }
}
