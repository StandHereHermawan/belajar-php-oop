<?php

require_once __DIR__ . "/data/Class-2.php";
require_once __DIR__ . "/util/Util-2.php";

use Data\{Company, Programmer as Programmer, BackendProgrammer as BackendProgrammer, FrontendProgrammer as FrontendProgrammer};

$company = new Company(new Programmer("Larry"));
$company->setProgrammer(new Programmer("Terry"));
var_dump($company);

$company->setProgrammer(new BackendProgrammer("Andrew"));
var_dump($company);

$company->setProgrammer(new FrontendProgrammer("Davisd"));
var_dump($company);

sayHello(new Programmer("Larry"));
sayHello(new BackendProgrammer("James"));
sayHello(new FrontendProgrammer("Kimi"));