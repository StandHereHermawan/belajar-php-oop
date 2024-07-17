<?php

require_once __DIR__ . "/../exception/Exception.php";

function validateLoginRequest(LoginRequest $loginRequest)
{
    $issetUsername = $loginRequest->issetPassword();
    $issetPassword = $loginRequest->issetUsername();

    if (!$issetUsername) {
        # exception code...
        throw new ValidationException("Username is Null.");
    } else if (!$issetPassword) {
        # exception code...
        throw new ValidationException("Password is Null.");
    } else if ($loginRequest->getUsername() == "") {
        # exception code...
        throw new Exception("Username is Blank.");
    } else if ($loginRequest->getPassword() == "") {
        # exception code...
        throw new Exception("Password is Blank.");
    } else if (trim($loginRequest->getUsername()) == "") {
        # exception code...
        throw new Exception("Username is Blank.");
    } else if (trim($loginRequest->getPassword()) == "") {
        # exception code...
        throw new Exception("Password is Blank.");
    } else {
        # code...
        echo "Login Success." . PHP_EOL;
    }
}
