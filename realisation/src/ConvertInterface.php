<?php
namespace App;

/**
 * Interface qui définit les méthodes de base pour conversions
 */
interface ConvertInterface
{
    public function getDecimal(): int;
    public function getBinary(): string;
    public function getHexa(): string;
}
