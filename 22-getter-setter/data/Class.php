<?php

namespace Data;

class ProductGeneral
{
    private string $name;
    private string $description = "Belum Ada Deskripsi";
    private bool $available;
    private int $price;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        # Validation di setter Function/Method
        if (trim($name) !== "") {
            $this->name = $name;
        }
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}
