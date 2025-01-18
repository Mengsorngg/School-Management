<?php

function login ($email){
    global $conn;

    $state = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $state->execute(['email' => $email]);

    return $state->fetch();
}