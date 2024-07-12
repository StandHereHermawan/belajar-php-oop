<?php

# Cara kedua mendeklarasi helper.
# Ini berarti semua function, variable, class dan lain-lain berada dalam file dengan namespace
# harus dideklarasikan terlebih dahulu namespacenya baru function, variable atau class-nya.
namespace Helper;

function helpMe()
{
    echo "HELP ME" . PHP_EOL;
}

const APPLICATION = "Belajar PHP OOP";
