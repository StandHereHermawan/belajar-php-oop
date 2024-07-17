<?php

require_once __DIR__ . "/../data/LoginRequest.php";
require_once __DIR__ . "/../exception/Exception.php";

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!$request->issetUsername()) {
            throw new ValidationException("Username is Null!");
        } else if (!$request->issetPassword()) {
            throw new ValidationException("Password is Null!");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PRIVATE);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set.");
            } elseif (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null.");
            }
        }
    }
}
