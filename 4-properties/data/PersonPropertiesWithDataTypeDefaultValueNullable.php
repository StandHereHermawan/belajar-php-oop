<?php

class PersonPropertiesWithDataTypeDefaultValueNullable
{
    var string $id;
    var string $name;
    var ?string $email = null;
    var string $gender = "MALE";
}
