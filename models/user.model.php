<?php
function getAllUser(){
    global $conn;

    $state = $conn->prepare("SELECT * FROM users LEFT JOIN roles ON users.role_id = roles.role_id ");
    $state->execute();
    return $state->fetchAll(PDO::FETCH_ASSOC);
}