<?php

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2003-03-12 11:29:13", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    # code...
    var_dump($date);
} else {
    # code...
    echo "Format Salah." . PHP_EOL;
}
