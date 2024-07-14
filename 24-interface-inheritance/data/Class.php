<?php

interface Brand
{
    function getBrand(): string;
}

interface Maintenance
{
    function isMaintenance(): bool;
}

class Avanza implements Brand, Maintenance
{
    private String $brand = "Toyota";
    private bool $isMaintenance = false;

    public function isMaintenance(): bool
    {
        return $this->isMaintenance;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }
}
