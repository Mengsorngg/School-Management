<?php

//check is user already logged in
if (isset($_SESSION["user"])) {
    if ($_SESSION["user"]["role"] == "Admin") {
        header("Location: /admin/dashboard");
    } else if ($_SESSION["user"]["role"] == "Manager") {
        header("Location: /manager/dashboard");
    } else if ($_SESSION["user"]["role"] == "Teacher") {
        header("Location: /teacher/dashboard");
    }
}

require "models/auth.model.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user = getUserBy($email);
    if (!empty($user)) {
        if ($password == $user["password"]) {
            $_SESSION["user"] = $user;
            if ($user["role"] == "Admin") {
                header("Location: /admin/dashboard");
                
            } else if ($user["role"] == "Manager") {
                header("Location: /manager/dashboard");
            } else if ($user["role"] == "Teacher") {
                header("Location: /teacher/dashboard");
            }
        } else {
            $error = "Password is incorrect";
        }
    } else {
        $error = "Account not exist";
    }
}
require "views/auth/login.view.php";
