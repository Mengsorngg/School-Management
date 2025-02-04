<?php

function getUserBy ($email){
    global $conn;

    $state = $conn->prepare("SELECT * FROM users LEFT JOIN roles ON users.role_id = roles.role_id WHERE email = :email");
    $state->execute(['email' => $email]);

    return $state->fetch();
}