<?php

require_once __DIR__ . "/Interfaces.php";

class Palisade implements Vehicle
{
    private string $vehicleName = "Palisade";
    private string $brand = "Hyundai";
    private float $oilNeededInLitres = 4.0;
    private bool $maintenance = false;
    private int $tire = 4;

    function getAllTiresNeeded(): int
    {
        return $this->tire;
    }

    function getCarName(): string
    {
        return $this->vehicleName;
    }

    function getOilNeededInLitres(): float
    {
        return $this->oilNeededInLitres;
    }

    function isMaintenance(): bool
    {
        return $this->maintenance;
    }

    function getBrand(): string
    {
        return $this->brand;
    }
}
