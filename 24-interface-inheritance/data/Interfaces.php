<?php

interface VehicleBrand
{
    function getBrand(): string;
}

interface VehicleMaintenance
{
    function isMaintenance(): bool;
}

interface Tire
{
    function getAllTiresNeeded(): int;
}

interface OilNeededInLitres
{
    function getOilNeededInLitres(): float;
}

interface VehicleName
{
    function getCarName(): string;
}

interface Vehicle extends VehicleName, OilNeededInLitres, Tire, VehicleBrand, VehicleMaintenance
{
    # Kode
}
