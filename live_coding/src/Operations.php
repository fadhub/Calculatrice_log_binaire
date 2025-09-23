<?php
namespace App\Calculatrice;

/**
 * Classe principale qui fait la conversion
 * - Implémente l'interface
 * - Utilise le trait
 */
class Operations implements ConvertInterface
{
    use ConvertTrait;

    private int $number; // Propriété typée

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

    /**
     * Exemple de logique binaire demandée (ET, OU, XOR, décalages)
     */
    public function demoBinaryOps(): array
    {
        $x = $this->number;
        $y = 15; // juste un exemple pour tester

        return [
            'AND'  => $x & $y,
            'OR'   => $x | $y,
            'XOR'  => $x ^ $y,
            //sheftleft
            '<<1'  => $x << 1,
            //sheftright
            '>>1'  => $x >> 1,
        ];
    }
}
