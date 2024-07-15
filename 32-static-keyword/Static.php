<?php

require_once __DIR__ . "/data/Helper.php";

use Helper\Static\MathHelper;

echo MathHelper::$name . PHP_EOL;

$total = MathHelper::sum(10, 20, 30, 40, 50);
echo "Total: $total" . PHP_EOL;
