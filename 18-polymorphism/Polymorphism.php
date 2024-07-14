<?php

require_once __DIR__ . "/data/Class.php";
require_once __DIR__ . "/util/Util.php";

$company = new Company();
$company->programmer = new Programmer("Terry");
var_dump($company);

$company->programmer = new BackendProgrammer("Andrew");
var_dump($company);

$company->programmer = new FrontendProgrammer("Davis");
var_dump($company);

sayHello(new Programmer("Larry Page"));
sayHello(new FrontendProgrammer("Richard Stallman"));
sayHello(new BackendProgrammer("Alex Wu"));
