<!DOCTYPE html>
<html>
<head>
    <title>Blog - Home</title>
</head>
<body>
    <h1>Welcome to the Blog!</h1>
    <!-- Hiển thị danh sách bài viết mới nhất -->
    <ul>
    <?php
        foreach($posts as $i=>$post){
            echo "<li>".$post["title"]."</li>";
        }
    ?>
    </ul>
</body>
</html>