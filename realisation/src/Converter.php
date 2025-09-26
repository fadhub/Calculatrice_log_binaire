<?php
namespace App;

/**
 * Classe qui convertit un entier en décimal/binaire/hexadécimal
 */
class Converter implements ConvertInterface
{
    use ConvertTrait;

    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getDecimal(): int
    {
        return $this->number;
    }

    public function getBinary(): string
    {
        return decbin($this->number);
    }

    public function getHexa(): string
    {
        return strtoupper(dechex($this->number));
    }
}
