<?php

class ZeroSlide
{
    private array $properties = [];

    # Magic Function yang Dieksekusi ketika mengakses properties yang tidak tersedia
    public function __get($name): mixed
    {
        echo "Magic Function __get() diakses di class ZeroSlide." . PHP_EOL;
        return $this->properties[$name];
    }

    # Magic Function yang Dieksekusi ketika mengubah properties yang tidak tersedia.
    public function __set($name, $value): void
    {
        echo "Magic Function __set() diakses di class ZeroSlide." . PHP_EOL;
        $this->properties[$name] = $value;
    }

    # Magic Function yang Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia.
    public function __isset($name): bool
    {
        echo "Magic Function __isset() diakses di class ZeroSlide." . PHP_EOL;
        return isset($this->properties[$name]);
    }

    # Magic Function yang Dieksekusi ketika menggunakan unset() properties yang tidak tersedia.
    public function __unset($name): void
    {
        echo "Magic Function __unset() diakses di class ZeroSlide." . PHP_EOL;
        unset($this->properties[$name]);
    }

    # Magic Function yang Dieksekusi ketika memanggil function yang tidak tersedia.
    public function __call($methodName, $arguments)
    {
        echo "Magic Function __call() diakses di class ZeroSlide." . PHP_EOL;
        $join = join(", ", $arguments);
        echo "Call function $methodName with arguments $join." . PHP_EOL;
    }

    # Magic Function yang Dieksekusi ketika memanggil static function yang tidak tersedia
    public static function __callStatic($methodName, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call static function $methodName with arguments $join." . PHP_EOL;
    }
}
