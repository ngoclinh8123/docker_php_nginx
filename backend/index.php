<?php
// import controller here
require 'app/controllers/HomeController.php';
require 'config/route.php';

// $controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'home';
// $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$route = new Route();
$url = $route->handleUrl();

$action=$url["action"];
$module= $url["module"];
$detail = $url["detail"];
$query = $url["query"];

// // Xác định tên lớp Controller và phương thức trong lớp để gọi
$controllerClassName = ucfirst($module) . 'Controller';
$controllerMethodName = $action;

// // Kiểm tra xem lớp Controller và phương thức có tồn tại không
if (class_exists($controllerClassName) && method_exists($controllerClassName, $controllerMethodName)) {
    // Tạo đối tượng Controller và gọi phương thức
    $controller = new $controllerClassName();
    $controller->$controllerMethodName();
} else {
    // Nếu không tồn tại, điều hướng về trang lỗi hoặc trang mặc định
    echo "404 - Page Not Found";
}
