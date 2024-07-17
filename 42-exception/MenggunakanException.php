<?php

require_once __DIR__ . "/data/LoginRequest.php";
require_once __DIR__ . "/exception/Exception.php";
require_once __DIR__ . "/helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->setUsername("Terry");
$loginRequest->setPassword("rahasia");
validateLoginRequest($loginRequest);

# 1. Try Catch
try {
    $loginRequest->unsetPassword();
    $loginRequest->unsetUsername();
    validateLoginRequest($loginRequest);
} catch (ValidationException $e) {
    echo "Validation Error : {$e->getMessage()}" . PHP_EOL;
}

# 1. Multiple Try Catch
try {
    $loginRequest->setPassword("");
    $loginRequest->setUsername("");
    validateLoginRequest($loginRequest);
} catch (ValidationException $e) {
    echo "Validation Error : {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo "Error : {$e->getMessage()}" . PHP_EOL;
}

# 2. Multiple Try Catch
try {
    $loginRequest->unsetPassword();
    $loginRequest->unsetUsername();
    validateLoginRequest($loginRequest);    # Jika Exception terjadi di function baris ini, 
    # block kode baris selanjutnya dari 34-39 tidak akan dieksekusi. 
    # akan langsung mengeksekusi block catch.

    $loginRequest->setPassword("");
    $loginRequest->setUsername("");
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $e) {
    echo "Validation Error : {$e->getMessage()}" . PHP_EOL;
}

# 3. Multiple Try Catch
try {
    $loginRequest->setPassword("    ");
    $loginRequest->setUsername("    ");
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $e) {
    if ($e instanceof ValidationException) {
        # code...
        echo "Validation Error : {$e->getMessage()}" . PHP_EOL;
    } else if ($e instanceof Exception) {
        # code...
        echo "Error : {$e->getMessage()}" . PHP_EOL;
    }
}

echo "Program dibawah baris try catch dieksekusi." . PHP_EOL . PHP_EOL;

# 1. Block Kode Finally.
try {
    $loginRequest->setPassword("    ");
    $loginRequest->setUsername("    ");
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $e) {
    if ($e instanceof ValidationException) {
        # code...
        echo "Validation Error : {$e->getMessage()}" . PHP_EOL;
    } else if ($e instanceof Exception) {
        # code...
        echo "Error : {$e->getMessage()}" . PHP_EOL;
    } else {
        echo "Error : {$e->getMessage()}" . PHP_EOL;
    }
} finally {
    echo "Error atau tidak, blok kode Finally selalu di eksekusi." . PHP_EOL;
}

# 2. Block Kode Finally.
try {
    $loginRequest->setPassword("arief");
    $loginRequest->setUsername("rahasia");
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $e) {
    if ($e instanceof ValidationException) {
        # code...
        echo "Validation Error : {$e->getMessage()}" . PHP_EOL;
    } else if ($e instanceof Exception) {
        # code...
        echo "Error : {$e->getMessage()}" . PHP_EOL;
    } else {
        echo "Error : {$e->getMessage()}" . PHP_EOL;
    }
} finally {
    echo "Error atau tidak, blok kode Finally selalu di eksekusi." . PHP_EOL;
}

# 1. Debug Exception.
try {
    $loginRequest->setPassword("");
    $loginRequest->setUsername("");
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $e) {
    # 1. Debug Exception cara pertama.
    var_dump($e->getTrace());

    # 2. Debug exception cara kedua.
    echo $e->getTraceAsString() . PHP_EOL;

    if ($e instanceof ValidationException) {
        # code...
        echo "Validation Error : {$e->getMessage()}" . PHP_EOL;
    } else if ($e instanceof Exception) {
        # code...
        echo "Error : {$e->getMessage()}" . PHP_EOL;
    } else {
        echo "Error : {$e->getMessage()}" . PHP_EOL;
    }
} finally {
    echo "Error atau tidak, blok kode Finally selalu di eksekusi." . PHP_EOL;
}
