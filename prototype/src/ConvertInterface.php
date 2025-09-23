<?php
namespace App\Calculatrice;

/**
 * Interface qui définit les méthodes de conversion
 */
interface ConvertInterface
{
    public function getDecimal(): int;
    public function getBinary(): string;
    public function getHexa(): string;
}
