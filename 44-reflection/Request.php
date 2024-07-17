<?php

require_once __DIR__ . "/data/LoginRequest.php";
require_once __DIR__ . "/data/RegisterRequest.php";
require_once __DIR__ . "/exception/Exception.php";
require_once __DIR__ . "/util/Validation.php";

$loginRequest = new LoginRequest();

try {
    ValidationUtil::validateReflection($loginRequest);
} catch (Exception $th) {
    if ($th instanceof ValidationException) {
        echo "Validation Exception {$th->getTraceAsString()}" . PHP_EOL;
        echo "" . $th->getMessage() . PHP_EOL;
    } else {
        echo "Exception {$th->getTraceAsString()}" . PHP_EOL;
        echo "" . $th->getMessage() . PHP_EOL;
    }
}

$registerRequest = new RegisterRequest();

try {
    ValidationUtil::validateReflection($registerRequest);
} catch (Exception $th) {
    if ($th instanceof ValidationException) {
        echo "Validation Exception {$th->getTraceAsString()}" . PHP_EOL;
        echo "" . $th->getMessage() . PHP_EOL;
    } else {
        echo "Exception {$th->getTraceAsString()}" . PHP_EOL;
        echo "" . $th->getMessage() . PHP_EOL;
    }
}
