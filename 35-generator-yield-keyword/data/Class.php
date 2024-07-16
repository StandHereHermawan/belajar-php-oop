<?php

# Dengan Yield Keyword
function getBilanganGanjil(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        # code...
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

# Tapa Yield Keyword
# Menggunakan Array Iterator.
function getBilanganGenap(int $max): Iterator
{
    $array = [];
    for ($i = 0; $i <= $max; $i++) {
        # Syntax Alternatives.
        if ($i % 2 == 0) :
            $array[] = $i;
        endif;
    }
    return new ArrayIterator($array);
}
