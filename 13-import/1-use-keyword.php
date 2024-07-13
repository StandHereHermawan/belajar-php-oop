<?php

require_once __DIR__ . "/data/Conflict.php";
require_once __DIR__ . "/data/Helper.php";

use Data\One\Conflict;
# use Data\Two\Conflict; Baris Kode ini error karena 2 namespace tidak boleh mempunyai nama class yang sama.
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict("Arief");
$conflict2 = new Data\Two\Conflict("Hilmi");

helpMe();
echo APPLICATION . PHP_EOL;
