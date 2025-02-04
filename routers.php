<?php

$route = [
    "/" => "controllers/welcome.controller.php",
    "/login" => "controllers/auth/login.controller.php",
    "/logout" => "controllers/auth/logout.controller.php",
    "/admin/dashboard" => "controllers/admin/index.php",
    "/manager/dashboard" => "views/manager/dashboard.php", 
    "/teacher/dashboard" => "views/teacher/dashboard.php"
    
];

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];
if (array_key_exists($uri, $route)) {
    require $route[$uri];
} else {
    require "views/error/404.php";
}
