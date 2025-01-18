<?php

$route = [
    "/" => "controllers/welcome.controller.php",
    "/login" => "controllers/auth/login.controller.php",
    
];

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];
if (array_key_exists($uri, $route)) {
    require $route[$uri];
} else {
    require "views/error/404.php";
}
